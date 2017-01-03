<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sports(){
        return $this->hasMany('App\Sport');
    }

    public function friends(){
        return $this->hasMany('App\Friend');
    }

    public function sportDetails(){
        return $this->hasMany('App\SportDetail');
    }

    public function moments(){
        return $this->hasMany('App\Moment');
    }

    public function activities(){
        return $this->hasMany('App\Activity');
    }

    public function join_activities(){
        return $this->hasMany('App\join_activity');
    }

    protected static function rules()
    {
        return [
            'name' => 'required',
            'password' => 'required'
        ];
    }
}
