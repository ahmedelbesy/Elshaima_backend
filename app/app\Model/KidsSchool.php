<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KidsSchool extends Model 
{

    protected $table = 'kids_school';
    public $timestamps = true;
    protected $fillable = array('kids_id', 'school_id');

}