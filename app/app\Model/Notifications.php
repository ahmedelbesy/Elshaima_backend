<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model 
{

    protected $table = 'notifications';
    public $timestamps = true;
    protected $fillable = array('notification', 'father_id');

    public function father()
    {
        return $this->hasMany('App\Model\Fathers');
    }

}