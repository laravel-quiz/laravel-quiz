<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/dashboard','AdminController@index')->name('admin.index');

Route::prefix('/admin')->group(function(){

    Route::get('/questionanswer','QuestionAnswerController@index')->name('questionanswer');
    Route::get('/questionanswer/create','QuestionAnswerController@create')->name('questionanswer.create');
    Route::post('/questionanswer/store','QuestionAnswerController@store')->name('questionanswer.store');
    Route::get('/questionanswer/{id}/edit','QuestionAnswerController@edit')->name('questionanswer.edit');
    Route::put('/questionanswer/{id}','QuestionAnswerController@update')->name('questionanswer.update');
    Route::get('/questionanswer/{id}','QuestionAnswerController@show')->name('questionanswer.show');
    Route::delete('/questionanswer/{id}','QuestionAnswerController@destroy')->name('questionanswer.destroy');

    Route::get('/incorrectanswer','IncorrectAnswerController@index')->name('incorrectanswer');
    Route::get('/incorrectanswer/create','IncorrectAnswerController@create')->name('incorrectanswer.create');
    Route::post('/incorrectanswer/store','IncorrectAnswerController@create')->name('incorrectanswer.create');
    Route::get('/incorrectanswer/{id}/edit','IncorrectAnswerController@edit')->name('incorrectanswer.edit');
    Route::put('/incorrectanswer/{id}','IncorrectAnswerController@update')->name('incorrectanswer.update');
    Route::get('/incorrectanswer/{id}','IncorrectAnswerController@show')->name('incorrectanswer.show');
    Route::delete('/incorrectanswer/{id}','IncorrectAnswerController@destroy')->name('incorrectanswer.destroy');
});



Route::get('/quiz','QuizController@index')->name('quiz.index');
//Route::get('/quiz/all','QuizController@getAll')->name('quiz.all');

