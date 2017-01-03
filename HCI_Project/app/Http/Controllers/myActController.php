<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use Auth;
use App\Http\Requests;

class myActController extends Controller
{
    public function home(){
        $allActivity=Activity::where('user_id',Auth::user()->id)->get();
        return view('activites/myActivity',['allActivity'=>$allActivity]);
    }
}
