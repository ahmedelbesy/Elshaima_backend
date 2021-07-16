<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model 
{

    protected $table = 'admins';
    public $timestamps = true;
    protected $fillable = array('username', 'password', 'school_id');
    protected $hidden = array('password');

    public function school()
    {
        return $this->hasOne('App\Model\School');
    }

}