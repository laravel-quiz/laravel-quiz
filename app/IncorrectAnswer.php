<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncorrectAnswer extends Model
{
    protected $table = 'incorrect_answers';

    protected $fillable = ['answer'];

    public $timestamps = false;

    public function quiz(){
        return $this->belongsTo('App\Quiz');
    }
}
