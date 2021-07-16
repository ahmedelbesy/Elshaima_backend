<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Fathers extends Model 
{

    protected $table = 'fathers';
    public $timestamps = true;
    protected $fillable = array('username', 'password', 'fcm_token', 'phone_number');
    protected $hidden = array('password');

    public function kids()
    {
        return $this->hasMany('App\Model\Kids');
    }

    public function notification()
    {
        return $this->hasMany('App\Model\Notifications');
    }

}