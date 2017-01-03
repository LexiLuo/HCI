<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function join_activities(){
        return $this->hasMany('App\join_activity');
    }
}
