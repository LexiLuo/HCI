<?php

namespace App\Http\Controllers;

use App\message;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class MessageController extends Controller
{
    public function home(){
        $allMessage=message::where('user_id',Auth::user()->id)->get();
        $all=message::where('state',0)->where('user_id',Auth::user()->id)->get();
        foreach ($all as $msg){
            $msg->state=1;
            $msg->save();
        }
        return view('message/message',['allMessage'=>$allMessage]);
    }

    public function delete(){
        $array = $_POST['message'];
        foreach ($array as $ar){
            message::where('id',$ar)->delete();
        }
        return redirect('/message');
    }
}
