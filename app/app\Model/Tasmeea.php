<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tasmeea extends Model 
{

    protected $table = 'tasmeea';
    public $timestamps = true;
    protected $fillable = array('looh', 'ayah', 'old_looh_qreeb', 'old_looh_baeed', 'halqa', 'helper_name', 'helper_sora', 'rate', 'teacher_id', 'tasmeea_date');

}