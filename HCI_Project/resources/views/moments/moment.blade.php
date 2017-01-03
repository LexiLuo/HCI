@extends('master')

@section('content')

    <div class="moment-main" >
        <div class="moment-person" style="border-radius: 8px;">
            <div class="moment-person-picture">
                <img src="assets/images/avatar1.jpg" style="border-radius: 60px;width: 120px;">
                <div class="moment-person-name">
                    <span>{{Auth::user()->name}}</span>
                </div>
            </div>

            <div class="moment-person-info">

                <div class="indo-mine">
                    <i class="fa-user"></i><span>我的动态 ： {{$count}}</span>
                </div>

                <div class="info-friend">
                    <i class="fa-user"></i><span>我的好友 ： {{$friendCount}}</span>
                </div>
            </div>

            {{--<div class="moment-check">--}}
                {{--<button class="checkButton">签到 ： 0</button>--}}
            {{--</div>--}}

            <button style="border-radius: 8px;" type="button" class="btn btn-success btn-block text-left moment-check" onclick="checkIn()">
                <span class="button-text" id="check">签到 ： {{Auth::user()->check}}</span>
                <i class="fa-check pull-right"></i>
            </button>

            <div class="moment-put" >
                <a href="/addMoment" type="button" class="btn btn-success btn-block text-left " style="border-radius: 8px;">
                    <span class="button-text">发布动态</span>
                    <i class="fa-pencil pull-right"></i>
                </a>
            </div>
        </div>

        <div class="moment-contain">
            @foreach($allMoments as $moment)
            <div class="moment-item" style="border-radius: 8px;border-color: #72d057;border-width: 6px;">
                <div class="moment-picture">
                    <img src="assets/images/user-1.png" style="border-radius: 30px;width: 50px;">
                </div>

                <div class="moment-basic">
                    <div  class="moment-name">
                        <span style="color: #555555">{{$moment->name}}</span>
                    </div>
                    <div  class="moment-time">
                        <span>{{$moment->time}}</span>
                    </div>
                </div>

                <div class="moment-content">
                    <span>{{$moment->content }}</span>
                </div>

                <div class="story-options-links">
                    <a style="color:#ff776f;" onclick="good({{$moment->id}})" href="#">
                        <i class="linecons-heart"></i>
                        <span id="good{{$moment->id}}">Like ({{$moment->num}})</span>
                    </a>

                    <a href="#">
                        <i class="linecons-comment"></i>
                        Comments
                        <span>(5)</span>
                    </a>
                </div>


            </div>
            @endforeach
        </div>
    </div>

    <script>
        function checkIn(){
            $.ajax({
                type:'get',
                url:'/check',
                data:'',
                success:function(data){
                    $("#check").html('签到 ： '+data.msg);
                }
            });
        }

        function good(id){
            $.ajax({
                type:'get',
                url:'/good/{id}',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{ id: id },
                success:function(data){
                    $("#good"+id).html('Like ('+data.msg+')');
                },
            });
        }
    </script>

@stop