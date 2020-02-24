<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Quiz as QuizResource;
use App\Quiz;
use App\User;

class QuizController extends Controller
{
    public function index(){
        return view('front.quiz.index');
    }


    public function getAll(){
        return new QuizResource(Quiz::find(1));
    }


    public function updateScore(Request $request){
        $user = User::find($request->userid);
        $user->score = $request->score;
        $user->save();
        return $user;
        
    }
}
