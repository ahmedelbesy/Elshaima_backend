<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SchoolTeacher extends Model 
{

    protected $table = 'school_teacher';
    public $timestamps = true;
    protected $fillable = array('teacher_id', 'school_id');

}