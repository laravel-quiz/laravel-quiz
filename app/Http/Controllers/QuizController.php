<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Quiz as QuizResource;
use App\Mail\GameScore;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailJob;
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
        if($user->score != null){
            if($request->score > $user->score){
                $user->score = $request->score;
                //Mail::to($user)->send(new GameScore($user));
                SendEmailJob::dispatch($user)->delay(now()->addMinutes(1));
            }
        }
        else{
            $user->score = $request->score;
        }
        
        $user->save();
        return $user;
        
    }
}
