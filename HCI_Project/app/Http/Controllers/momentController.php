<?php

namespace App\Http\Controllers;

use App\Moment;
use App\Friend;
use Auth;
use App\message;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class momentController extends Controller
{
    public function home(){
        $allMoment=DB::table('moments')->whereIn('user_id',function ($query){
            $query->select(DB::raw('friend_id'))->from('friends')->where('user_id',Auth::user()->id);
        })->orWhere('user_id',Auth::user()->id)->orderBy('time', 'desc')->get();
        if($allMoment==null){
            $allMoment=new Moment();
        }
        $count=Moment::Where('user_id',Auth::user()->id)->count();
        $friendCount=Friend::Where('user_id',Auth::user()->id)->count();
        return view('moments/moment',['allMoments'=>$allMoment,'count'=>$count,'friendCount'=>$friendCount]);
    }

    public function checkIn(){
        Auth::user()->check+=1;
        Auth::user()->save();
        return response()->json(array('msg'=> Auth::user()->check), 200);
    }

    public function good(){
        $id=$_GET['id'];
        $moment=Moment::where('id',$id)->first();
        $user_id=$moment->user_id;
        $moment->num+=1;
        $moment->save();

        $message=new message();
        $message->sender_id=Auth::user()->id;
        $message->time=date("Y-m-d h:i:s");
        $message->sender_name=Auth::user()->name;
        $message->content='给了您一个赞';
        $message->user_id=$user_id;

        $message->save();
        return response()->json(array('msg'=> $moment->num), 200);
    }

    public function addMoment(){
        $todayRecord=DB::table('sports')->where('user_id',Auth::user()->id)->first();
        if($todayRecord==null){
            dd('ss');
        }
        $content='今天行走'.$todayRecord->step.'步，共计'.$todayRecord->length.'米，消耗卡路里'.$todayRecord->caloria.'大卡';
        $moment=new Moment();
        $moment->content=$content;
        $moment->time=date("Y-m-d h:i:s");
        $moment->num=0;
        $moment->user_id=Auth::user()->id;
        $moment->name=Auth::user()->name;

        $moment->save();

        return redirect('/moments');
    }
}
