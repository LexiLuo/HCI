@extends('master')

@section('content')

    <div class="wealth-content">

        <div class="moment-person" style="border-radius: 8px">
            <div class="moment-person-picture">
                <img src="assets/images/avatar1.jpg" style="border-radius: 60px;width: 120px;">
                <div class="moment-person-name">
                    <span>{{Auth::user()->name}}</span>
                </div>
            </div>

            <div class="moment-person-info">

            </div>

            <div class="wealth-title" style="color: #ffc810">
                <span>My Level : Level 3</span>
            </div>

            <div class="wealth-total">
                <span>My Experiences ： {{Auth::user()->wealth}}</span>
            </div>

            <div class="wealth-way">
                <div class="way-title">
                    <span>Ways to get Experiences</span>
                </div>

                <div class="way-contain">
                    <span>通过每日行走步数，发布每日活动以及每日签到获得</span>
                </div>
            </div>

            {{--<div class="moment-check">--}}
            {{--<button class="checkButton">签到 ： 0</button>--}}
            {{--</div>--}}

            <button style="border-radius: 8px" type="button" class="btn btn-success btn-block text-left moment-check" onclick="checkIn()">
                <span class="button-text" id="check">签到 ： {{Auth::user()->check}}</span>
                <i class="fa-check pull-right"></i>
            </button>
        </div>


        <div class="rank wealth-rank" style="border-radius: 8px">
            <div class="rank-title" style="border-radius: 8px">
                <span>Experience Rankings</span>
            </div>

            <div class="rank-content">
                <?php $var = 1; ?>
                @foreach($rank as $rankItem)
                <ul class="rank-ul">
                    <li>
                        <span class="badge badge-orange" >{{$var}}</span>
                    </li>
                    <li>
                        <img src="assets/images/photo1.jpg" style="border-radius: 60px;width: 50px;">
                    </li>
                    <li>
                        <span>{{$rankItem->name}}</span>
                    </li>
                    <?php $var += 1; ?>
                </ul>
                @endforeach
            </div>
        </div>

        <div class="rank wealth-myrank" style="border-radius: 8px">
            <div class="myrank-title" style="border-radius: 8px">
                <span>My Friends Rankings</span>
            </div>

            <div class="myrank-content">
                <?php $var = 1; ?>
                @foreach($friendRank as $rankItem)
                    <ul class="rank-ul">
                        <li>
                            <span class="badge badge-orange">{{$var}}</span>
                        </li>
                        <li>
                            <img src="assets/images/photo1.jpg" style="border-radius: 60px;width: 50px;">
                        </li>
                        <li>
                            <span>{{$rankItem->name}}</span>
                        </li>
                    </ul>
                        <?php $var += 1; ?>
                @endforeach
            </div>
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
    </script>

@stop

