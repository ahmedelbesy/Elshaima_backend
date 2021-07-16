<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class School extends Model 
{

    protected $table = 'schools';
    public $timestamps = true;
    protected $fillable = array('name');

    public function teacher()
    {
        return $this->hasMany('App\Model\Teachers');
    }

    public function kids()
    {
        return $this->hasMany('App\Model\Kids');
    }

}