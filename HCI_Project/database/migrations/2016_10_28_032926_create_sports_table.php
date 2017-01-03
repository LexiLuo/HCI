<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');                       #姓名
            $table->date('time');                         #日期
            $table->integer('step');                     #步数
            $table->integer('length');                    #距离
            $table->integer('caloria');                   #卡路里
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
