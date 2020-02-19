<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $filable = ['name'];
    public $timestamps = false;

    public function quizs(){
        return $this->hasMany('App\Quiz');
    }
}
