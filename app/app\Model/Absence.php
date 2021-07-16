<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model 
{

    protected $table = 'absence';
    public $timestamps = true;
    protected $fillable = array('absencetable_type', 'absencetable_id');

}