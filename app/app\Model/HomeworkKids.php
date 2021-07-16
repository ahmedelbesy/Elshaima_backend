<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HomeworkKids extends Model 
{

    protected $table = 'homework_kids';
    public $timestamps = true;
    protected $fillable = array('kids_id');

}