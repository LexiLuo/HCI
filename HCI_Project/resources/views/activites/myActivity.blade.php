@extends('master')

@section('content')

    <div class="activity-main" style="border-radius: 10px;">
        <div class="active-title">
            <div class="active-mainTitle"><h2><span>My Activities</span></h2></div>
            <ul class="nav nav-pills" style="float: left">
                <li style="background-color: #64b2b1"><a href="#"><span style="color: white">Attend Numbers</span></a></li>
                <li style="background-color: #64b2b1;margin-left: 10px;"><a href="#"><span style="color: white">Start   Time</span></a></li>
                <li style="background-color: #64b2b1;margin-left: 10px;"><a href="#"><span style="color: white">Activities Experiences</span></a></li>
                <li style="background-color: #64b2b1;margin-left: 10px;"><a href="#"><span style="color: white">Activities Type</span></a></li>
            </ul>
            <a type="button" class="btn btn-default startActivity" href="/newActivity"><span>Create Activity</span></a>
        </div>

        <div class="activity-contant" >
            @foreach($allActivity as $activity)
            <div class="activity-item" style="border-radius: 10px;margin-top: 8px;">
                <div class="activity-left">
                    <div class="activity-name">
                        <a href="{{url('/ActivityDetail/'.$activity->id)}}"><h3><span>{{$activity->name}}</span></h3></a>
                    </div>

                    <div class="activity-draw">
                        <span>{{$activity->description}}</span>
                    </div>

                    <div class="activity-time">
                        <time class="cbp_tmtime" ><span>{{$activity->startTime}} - {{$activity->endTime}}</span></time>
                    </div>

                </div>

                <div class="activity-right2">
                    <div class="activity-money">
                        <span>Experiences ： {{$activity->money}}</span>
                    </div>

                    <div class="activity-type">
                        <span>Type ： {{$activity->type}}</span>
                    </div>

                    <div class="activity-number">
                        <span>{{$activity->number}} Users Attend</span>
                    </div>
                </div>

                <div class="activity-rightest">
                    <div class="activity-delete">
                        <a href="#"><span>DELETE</span></a>
                    </div>

                    <div class="activity-change">
                        <a href="#"><span>EDIT</span></a>
                    </div>

                </div>
            </div>

            @endforeach
        </div>
    </div>



@stop