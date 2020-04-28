<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function owner(){
        return $this->belongsTo('App\Owner');
    }
    public $timestamps = false;
}
