<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //
    protected $table = 'quiz';
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function incorrectanswers(){
        return $this->hasMany('App\IncorrectAnswer');
    }
}
