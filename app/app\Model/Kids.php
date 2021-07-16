<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kids extends Model 
{

    protected $table = 'kids';
    public $timestamps = true;
    protected $fillable = array('username', 'father_id');

    public function homework()
    {
        return $this->hasMany('App\Model\Homework');
    }

    public function absence()
    {
        return $this->hasMany('App\Model\Absence');
    }

    public function father()
    {
        return $this->hasOne('App\Model\Fathers');
    }

    public function payment()
    {
        return $this->hasOne('App\Model\Payment');
    }

    public function teacher()
    {
        return $this->hasMany('App\Model\Teachers');
    }

    public function tasmeea()
    {
        return $this->hasMany('App\Model\Tasmeea');
    }

}