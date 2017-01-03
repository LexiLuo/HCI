<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoinActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('join_activities', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('wealth');                    #财富数
            $table->string('user_id');                    #外键
            $table->string('activity_id');                #外键
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
