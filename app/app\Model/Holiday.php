<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model 
{

    protected $table = 'holiday';
    public $timestamps = true;
    protected $fillable = array('holiday_date', 'state', 'teacher_id');

}