<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KidsTeacher extends Model 
{

    protected $table = 'kids_teacher';
    public $timestamps = true;
    protected $fillable = array('teacher_id', 'kids_id', 'kids_rate');

}