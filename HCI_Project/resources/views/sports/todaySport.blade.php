@extends('master')

@section('content')

    <ul class="cbp_tmtimeline" style="margin-top: 50px;">
        @foreach($sportDetail as $detail)
        <li>
            <time class="cbp_tmtime" ><span>{{$detail->startTime}} - {{$detail->endTime}}</span></time>

            <div class="cbp_tmicon timeline-bg-gray">
                <i class="fa-user"></i>
            </div>

            <div class="cbp_tmlabel">
                <span>行走{{$detail->step}}步，行走距离{{$detail->length}}m，消耗卡路里{{$detail->caloria}}大卡</span>
            </div>
        </li>
        @endforeach
    </ul>

    <div class="static">

        <div class="col-sm-3">

            <div  class="xe-widget xe-counter-block" data-count=".num" data-from="0" data-to="{{$todayRecord->step}}" data-suffix=" STEPS" data-duration="2">
                <div class="xe-upper">

                    <div class="xe-icon">
                        <i class="linecons-cloud"></i>
                    </div>
                    <div class="xe-label">
                        <strong class="num" style="color: #0a0a0a">0 Steps</strong>
                        <span style="color: #0a0a0a">Today's walking steps</span>
                    </div>

                </div>
                <div class="xe-lower" style="color: #0a0a0a">
                    <div class="border" style="margin-top:10px;background-color: #0a0a0a"></div>

                    <span style="color: #0a0a0a">Rankings in all the users</span>
                    <strong style="font-size: 16px;">No.78</strong>
                </div>
            </div>

        </div>
        <div class="col-sm-3">

            <div class="xe-widget xe-counter-block xe-counter-block-purple" data-count=".num" data-from="0" data-to="{{$todayRecord->length}}" data-suffix=" MILES" data-duration="2">
                <div class="xe-upper">

                    <div class="xe-icon">
                        <i class="linecons-cloud"></i>
                    </div>
                    <div class="xe-label">
                        <strong class="num" >0 MILES</strong>
                        <span >TODAY'S WALKING DISTANCES</span>
                    </div>

                </div>
                <div class="xe-lower">
                    <div class="border" style="margin-top:10px;"></div>

                    <span >Rankings in all the users</span>
                    <strong style="font-size: 14px;" >NO.78</strong>
                </div>
            </div>

        </div>
        <div class="col-sm-3">

            <div class="xe-widget xe-counter-block xe-counter-block-orange" data-count=".num" data-from="0" data-to="{{$todayRecord->caloria}}" data-suffix=" CALORIES" data-duration="2">
                <div class="xe-upper">

                    <div class="xe-icon">
                        <i class="linecons-cloud"></i>
                    </div>
                    <div class="xe-label">
                        <strong class="num" style="color: #0a0a0a">0 CALORIES</strong>
                        <span style="color: #0a0a0a">TODAY'S HEAT COMPUTION</span>
                    </div>

                </div>
                <div class="xe-lower">
                    <div class="border" style="margin-top:10px;background-color: #0a0a0a"></div>

                    <span style="color: #0a0a0a">Rankings in all the users</span>
                    <strong style="font-size: 14px;color: #0a0a0a">NO.78</strong>
                </div>
            </div>

        </div>

        <div class="col-sm-3" style="margin-top: 25px;">

            <div class="xe-widget xe-counter-block xe-counter-block-pink" data-count=".num" data-from="0" data-to="{{$step}}" data-suffix=" STEPS" data-duration="2">
                <div class="xe-upper">

                    <div class="xe-icon">
                        <i class="linecons-cloud"></i>
                    </div>
                    <div class="xe-label">
                        <strong class="num">0 CALORIES</strong>
                        <span>CUMULATIVE WALKING STEPS</span>
                    </div>

                </div>
                <div class="xe-lower">
                    <div class="border" style="margin-top:10px;"></div>

                    <span>Rankings in all the users</span>
                    <strong style="font-size: 14px;">No.78</strong>
                </div>
            </div>

        </div>

        <div class="col-sm-3" style="margin-top: 25px;">

            <div class="xe-widget xe-counter-block xe-counter-block-blue" data-count=".num" data-from="0" data-to="{{$length}}" data-suffix=" MILES" data-duration="2">
                <div class="xe-upper">

                    <div class="xe-icon">
                        <i class="linecons-cloud"></i>
                    </div>
                    <div class="xe-label">
                        <strong class="num" style="color: #0a0a0a">0 Calories</strong>
                        <span style="color: #0a0a0a">CUMULATIVE EXERCISE DISTANCES</span>
                    </div>

                </div>
                <div class="xe-lower" >
                    <div class="border" style="margin-top:10px;background-color: #0a0a0a"></div>

                    <span style="color: #0a0a0a">Rankings in all the users</span>
                    <strong style="font-size: 14px;color: #0a0a0a">No.78</strong>
                </div>
            </div>

        </div>

        <div class="col-sm-3" style="margin-top: 25px;">

            <div class="xe-widget xe-counter-block xe-counter-block-turquoise" data-count=".num" data-from="0" data-to="{{$cal}}" data-suffix=" Calories" data-duration="2">
                <div class="xe-upper">

                    <div class="xe-icon">
                        <i class="linecons-cloud"></i>
                    </div>
                    <div class="xe-label">
                        <strong class="num">0 Calories</strong>
                        <span>UMULATIVE HEAT CONSUMPTION</span>
                    </div>

                </div>
                <div class="xe-lower">
                    <div class="border" style="margin-top:10px;"></div>

                    <span>Rankings in all the users</span>
                    <strong style="font-size: 14px;">NO.78</strong>
                </div>
            </div>

        </div>

    </div>

    <div class="sport-chart" style="margin-top: 270px;border-radius: 10px;height: 480px;">
        <div class="panel-heading" style="padding-top: 20px;padding-left:280px;">
            <h1>This Week's Walking Steps Distribution Diagram</h1>
        </div>
        <div id="main" style="width: 95%;height:320px;margin-left: 2%"></div>
    </div>

    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: ''
            },
            tooltip : {
                trigger: 'axis'
            },
            legend: {
                data:['邮件营销','联盟广告','视频广告','直接访问','搜索引擎']
            },
            toolbox: {
                feature: {
                    saveAsImage: {}
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : false,
                    data : ['Monday','Tuesday','Wednesday','Thursday','Firday','Saturday','Sunday']
                }
            ],
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [

                {
                    name:'Steps',
                    type:'line',
                    stack: '总量',
                    label: {
                        normal: {
                            show: true,
                            position: 'top'
                        }
                    },
                    areaStyle: {normal: {}},
                    data:[820, 932, 901, 934, 1290, 1330, 1320]
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>



@stop