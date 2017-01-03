<?php

namespace App\Http\Controllers;

use App\Moment;
use App\Friend;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class mymomentController extends Controller
{
    public function home(){
        $allMoment=Moment::Where('user_id',Auth::user()->id)->orderBy('time', 'desc')->get();
        if($allMoment==null){
            $allMoment=new Moment();
        }
        $count=Moment::Where('user_id',Auth::user()->id)->count();
        $friendCount=Friend::Where('user_id',Auth::user()->id)->count();
        return view('moments/myMoment',['allMoments'=>$allMoment,'count'=>$count,'friendCount'=>$friendCount]);
    }
}
