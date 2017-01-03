<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class WealthController extends Controller
{
    public function home(){
        $allRank=User::orderBy('wealth','desc')->limit(10)->get();
        $friendRank=User::whereIn('id',function ($query){
            $query->select(DB::raw('friend_id'))->from('friends')->where('user_id',Auth::user()->id);
        })->orderBy('wealth','desc')->get();
        return view('wealth/myWealth',['rank'=>$allRank,'friendRank'=>$friendRank]);
    }

}
