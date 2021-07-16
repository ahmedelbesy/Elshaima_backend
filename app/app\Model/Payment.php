<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model 
{

    protected $table = 'payment';
    public $timestamps = true;
    protected $fillable = array('month', 'state', 'kids_id');

}