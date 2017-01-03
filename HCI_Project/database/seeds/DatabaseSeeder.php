<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Activity;
use App\Friend;
use App\Moment;
use App\join_activity;
use App\Sport;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Activity::create([
            'name'=>'奔跑吧Web',
            'pioneer' => '罗小傻',
            'startTime' => '2016-10-18 19:45:06',
            'endTime' => '2016-10-18 19:50:06',
            'money' => 70,
            'type' => '个人运动',
            'user_id' => '3'
        ]);
        Activity::create([
            'name'=>'罗雪纯是小王八',
            'pioneer' => '我是小麦',
            'startTime' => '2016-10-18 19:45:06',
            'endTime' => '2016-10-18 19:50:06',
            'money' => 20,
            'type' => '个人运动',
            'user_id' => '1'
        ]);

    }
}
