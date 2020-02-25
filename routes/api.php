<?php

use Illuminate\Http\Request;
use App\Http\Resources\Quiz as QuizResource;
use App\Quiz;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/quiz/all',function(){
    $quizs = Quiz::get()->random(5);
    return QuizResource::collection($quizs);
});

Route::post('/quiz/score','QuizController@updateScore')->name('quiz.updatescore');
