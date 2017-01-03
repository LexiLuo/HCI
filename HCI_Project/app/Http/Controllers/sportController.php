<?php

namespace App\Http\Controllers;

use App\Sport;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class sportController extends Controller
{
    public function home()
    {
        $records=Auth::user()->sports;
        $step=0;$length=0;$cal=0;
        foreach ($records as $record){
            $step+=$record->step;
            $length+=$record->length;
            $cal+=$record->caloria;
        }
        $todayRecord=DB::table('sports')->where('time',date("Y-m-d"))->where('user_id',Auth::user()->id)->first();
        if($todayRecord==null){
            $todayRecord=new Sport();
            $todayRecord->step=0;
            $todayRecord->length=0;
            $todayRecord->caloria=0;
        }
        $w=date('w');
        if($w==0){
            $w=7;
        }
        $week=array(0,0,0,0,0,0,0);
        for ($i=0;$i<$w;$i++){
            $temp=DB::table('sports')->where('time',date("Y-m-d",strtotime("-".$i." day")))->first();
            if($temp!=null){
                $week[$w-$i-1]=$temp->step;
            }
        }
        $sportDetail=DB::table('sportDetails')->where('date',date("Y-m-d"))->where('user_id',Auth::user()->id)->get();
        return view('sports/todaySport',['week'=>$week,'todayRecord'=>$todayRecord,'sportDetail'=>$sportDetail,'step'=>$step,'length'=>$length,'cal'=>$cal]);
    }

}
