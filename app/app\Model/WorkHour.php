<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WorkHour extends Model 
{

    protected $table = 'work_hour';
    public $timestamps = true;
    protected $fillable = array('start_time', 'end_time');

}