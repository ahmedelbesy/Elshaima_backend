<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KidsTasmeea extends Model 
{

    protected $table = 'kids_tasmeea';
    public $timestamps = true;
    protected $fillable = array('kids_id', 'tasmeea_id');

}