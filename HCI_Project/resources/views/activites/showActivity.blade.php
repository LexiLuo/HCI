@extends('master')

@section('content')
    <div class="show-main">
        <div class="show-basicInfo">
            <div class="show-left">
                <div class="show-name">
                    <h2><span>{{$activity->name}}</span></h2>
                </div>
                <div class="show-otherInfo">
                    <div class="show-time">
                        <span>{{$activity->startTime}} —— {{$activity->endTime}}</span>
                    </div>
                    <div class="show-decription">
                        <span>{{$activity->description}}</span>
                    </div>
                </div>
            </div>
            <div class="show-right">
                <div class="show-type">
                    <span>{{$activity->type}}</span>
                </div>
                <div class="show-num">
                    <span><i class="fa-user"></i> {{$activity->number}} 人</span>
                </div>

                <div class="show-money">
                    <span><i class="fa-rmb"></i> {{$activity->money}} 小麦</span>
                </div>
                <a href="/joinActivity/{{$activity->id}}" class="btn btn-success btn-block show-check">
                    <span class="">我要加入</span>
                </a>
            </div>
            <div class="show-people">
                <div class="show-pioneer">
                    <div><span><h4>活动发起者</h4></span></div>
                    <div class="show-p">
                        <img src="{{URL::asset('assets/images/avatar1.jpg')}}" style="border-radius: 10px;width: 50px;">
                        <div class="join_name">
                            <span>{{$activity->pioneer}}</span>
                        </div>
                    </div>
                </div>
                <div class="show-involve">
                    <div class="show-pioneer">
                        <div><span><h4>活动参与者</h4></span></div>
                        @foreach($allJoin as $join)
                        <div class="show-join">
                            <img src="{{URL::asset('assets/images/avatar1.jpg')}}" style="border-radius: 10px;width: 50px;">
                            <div class="join_name">
                                <span>{{$join->username}}</span>
                            </div>
                            <div class="join_step">
                                <span>{{$join->step}}步</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="show-user">
            <div class="show-picture">
                <img src="{{URL::asset('assets/images/avatar1.jpg')}}" style="border-radius: 60px;width: 70px;">
                <div class="show-person-name">
                    <span>{{$activity->pioneer}}</span>
                </div>
            </div>
            <div class="show-info">
                <ul class="show-ul">
                    <li>
                        <div class="show-detail-label">
                            <span>活动</span>
                        </div>
                        <div class="show-number">
                            <span>{{$number}}</span>
                        </div>
                    </li>
                    <li>
                        <div class="show-detail-label">
                            <span>小麦</span>
                        </div>
                        <div class="show-number">
                            <span>{{$wealth}}</span>
                        </div>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-success btn-block text-left moment-check">
                <span class="button-text">添加好友</span>
                <i class="fa-check pull-right"></i>
            </button>
        </div>
    </div>
@stop