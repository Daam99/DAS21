<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attempt extends Model
{
    use HasFactory;
    public function user(){
    	return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    public function attempt_details(){
    	return $this->hasMany('App\Models\AttemptDetail','attempt_id','id');
    }
    public function score(){
    	return $this->hasOne('App\Models\Score', 'attempt_id', 'id');
    }
}
