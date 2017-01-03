<?php

namespace App\Http\Controllers;

use App\Activity;
use App\join_activity;
use App\User;
use App\Sport;
use App\message;
use Request;
use Auth;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class activityController extends Controller
{
    public function home(){
        $allActivity=Activity::where('endTime','>',date("Y-m-d h:i"))->get();
        return view('activites/activity',['allActivity'=>$allActivity]);
    }

    public function people(){
        $allActivity=Activity::where('endTime','>',date("Y-m-d h:i"))->orderBy('number', 'desc')->get();
        return view('activites/activity',['allActivity'=>$allActivity]);
    }

    public function startTime(){
        $allActivity=Activity::where('endTime','>',date("Y-m-d h:i"))->orderBy('startTime', 'desc')->get();
        return view('activites/activity',['allActivity'=>$allActivity]);
    }

    public function money(){
        $allActivity=Activity::where('endTime','>',date("Y-m-d h:i"))->orderBy('money', 'desc')->get();
        return view('activites/activity',['allActivity'=>$allActivity]);
    }

    public function type(){
        $allActivity=Activity::where('endTime','>',date("Y-m-d h:i"))->orderBy('money', 'desc')->get();
        return view('activites/activity',['allActivity'=>$allActivity]);
    }

    public function join($id){
        $money=Activity::where('id',$id)->first()->money;
        if(Auth::user()->level==2){
            $money=floor($money*0.75);
        }elseif (Auth::user()->level==3){
            $money=floor($money*0.5);
        }elseif (Auth::user()->level==4){
            $money=floor($money*0.3);
        }
        if(Auth::user()->wealth>$money){
            Auth::user()->wealth-=$money;
            Auth::user()->save();

            $join=new join_activity();
            $join->user_id=Auth::user()->id;
            $join->username=Auth::user()->name;
            $join->activity_id=$id;

            $join->save();

            $activity=Activity::where('id',$id)->first();
            $activity->number+=1;
            $activity->save();
            return redirect('/ActivityDetail/'.$id);
        }else{
            return redirect('/ActivityDetail/'.$id)->with('msg',"对不起，您的小麦不足。。。");
        }

    }

    public function findOne($id){
        $activity=Activity::where('id',$id)->first();
        $allJoin=join_activity::where('activity_id',$id)->get();
        $number=Activity::where('user_id',$activity->user_id)->count();
        $pioneer=User::where('id',$activity->user_id)->first();
        $wealth=$pioneer->wealth;
        $ifJoin=false;
        foreach ($allJoin as $join){
            if ($join->user_id==Auth::user()->id){
                $ifJoin=true;
            }
        }
        return view('activites/showActivity',['ifJoin'=>$ifJoin,'activity'=>$activity,'allJoin'=>$allJoin,'number'=>$number,'wealth'=>$wealth]);
    }

    public function add(){
        $date=explode('/',Request::input('startDate'));
        $startDate=$date[2].'-'.$date[0].'-'.$date[1];
        $date1=explode('/',Request::input('endDate'));
        $endDate=$date1[2].'-'.$date1[0].'-'.$date1[1];
        $startTime=substr(Request::input('startTime'),0,8);
        $endTime=substr(Request::input('endTime'),0,8);
        $startDate=$startDate." ".$startTime;
        $endDate=$endDate." ".$endTime;

        $invited=Request::input('invited');
        for($i=0;$i<count($invited);$i++){
            $message=new message();
            $message->sender_id=Auth::user()->id;
            $message->time=date("Y-m-d h:i:s");
            $message->sender_name=Auth::user()->name;
            $message->content='您的好友邀请你参加“'.Request::input('name').'”活动';
            $message->user_id=User::where('name',$invited[$i])->first()->id;

            $message->save();
        }

        $activity=new Activity();
        $activity->name=Request::input('name');
        $activity->pioneer=Auth::user()->name;
        $activity->user_id=Auth::user()->id;
        $activity->startTime=$startDate;
        $activity->endTime=$endDate;
        $activity->type=Request::input('type');
        $activity->description=Request::input('description');
        $activity->money=Request::input('money');
        $activity->number=1;

        $activity->save();
        $join=new join_activity();
        $join->user_id=Auth::user()->id;
        $join->username=Auth::user()->name;
        $join->activity_id=$activity->id;

        $join->save();
        return redirect('/allActivities');
    }

    public function search(){
        $name=Request::input('s');
        $sport=Activity::where('name',$name)->first();
        if ($sport==null){
            dd('sss');
        }else{
            $activity=Activity::where('id',$sport->id)->first();
            $allJoin=join_activity::where('activity_id',$sport->id)->get();
            $number=Activity::where('user_id',$activity->user_id)->count();
            $pioneer=User::where('id',$activity->user_id)->first();
            $wealth=$pioneer->wealth;
            $ifJoin=false;
            foreach ($allJoin as $join){
                if ($join->user_id==Auth::user()->id){
                    $ifJoin=true;
                }
            }
            return view('activites/showActivity',['ifJoin'=>$ifJoin,'activity'=>$activity,'allJoin'=>$allJoin,'number'=>$number,'wealth'=>$wealth]);
        }
    }
}
