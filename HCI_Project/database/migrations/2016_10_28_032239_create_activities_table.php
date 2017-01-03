<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');                       #活动名称
            $table->string('pioneer');                    #发起者
            $table->dateTime('startTime');                #开始时间
            $table->dateTime('endTime');                  #结束时间
            $table->integer('money');                     #悬赏
            $table->string('type');                       #类型
            $table->string('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
