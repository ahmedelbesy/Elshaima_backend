<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model 
{

    protected $table = 'homework';
    public $timestamps = true;
    protected $fillable = array('homework', 'teacher_id', 'homework_date');

}