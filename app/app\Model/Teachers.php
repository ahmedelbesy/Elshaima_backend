<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model 
{

    protected $table = 'teachers';
    public $timestamps = true;
    protected $fillable = array('username', 'password', 'work_hour_id', 'salary');
    protected $hidden = array('password');

    public function workHours()
    {
        return $this->hasOne('App\Model\WorkHour');
    }

    public function holiday()
    {
        return $this->hasMany('App\Model\Holiday');
    }

    public function homework()
    {
        return $this->hasMany('App\Model\Homework');
    }

    public function absence()
    {
        return $this->morphMany('App\Model\Absence');
    }

    public function kids()
    {
        return $this->hasMany('App\Model\Kids');
    }

    public function tasmeea()
    {
        return $this->hasMany('App\Model\Tasmeea');
    }

}