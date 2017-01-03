<?php

namespace App\Http\Controllers;

use App\Friend;
use App\User;
use Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function friends(){
        $friends=Friend::where('user_id',Auth::user()->id)->get();
        return view('personal/firends',['friends'=>$friends,'msg'=>'success']);
    }

    public function delete($id){
        Friend::where('user_id',Auth::user()->id)->where('friend_id',$id)->delete();
        return redirect('/friends')->with('msg','success');
    }

    public function addFriend(){
        $name=Request::input('s');
        $user=User::where('name',$name)->first();
        if ($user==null){
            return redirect('/friends')->with('msg','找不到此用户。。。');
        }else{
            $fri=Friend::where('user_id',Auth::user()->id)->where('friend_id',$user->id)->first();
            if ($fri!=null){
                return redirect('/friends')->with('msg','该用户已经是您好友了哦');
            }
            $friend=new Friend();
            $friend->user_id=Auth::user()->id;
            $friend->friend_id=$user->id;
            $friend->friendName=$user->name;

            $friend->save();
            return redirect('/friends')->with('msg','success');
        }
    }
}
