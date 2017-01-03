<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMomentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('content');                    #内容
            $table->dateTime('time');                     #日期
            $table->integer('num');                       #点赞数
            $table->string('user_id');                    #外键
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
