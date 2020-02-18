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
    Route::get('/user', 'UserController@index')->name('users.index');
    Route::get('/user/create', 'UserController@create')->name('users.create');
    Route::post('/user/store', 'UserController@store')->name('users.store');
    Route::get('/user/{id}', 'UserController@show')->name('users.show');
    Route::get('/user/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::put('/user/{id}', 'UserController@update')->name('users.update');
    Route::delete('/user/{id}', 'UserController@destroy')->name('users.destory');

    Route::get('/questionanswer','QuestionAnswerController@index')->name('questionanswer');
    Route::get('/questionanswer/create','QuestionAnswerController@create')->name('questionanswer.create');
    Route::post('/questionanswer','QuestionAnswerController@store')->name('quiz.store');
    Route::get('/questionanswer/{id}/edit','QuestionAnswerController@edit')->name('questionanswer.edit');
    Route::get('/questionanswer/{id}','QuestionAnswerController@show')->name('questionanswer.show');

    Route::get('/incorrectanswer','IncorrectAnswerController@index')->name('incorrectanswer');
    Route::get('/incorrectanswer/create','IncorrectAnswerController@create')->name('incorrectanswer.create');
    Route::post('/incorrectanswer/store','IncorrectAnswerController@create')->name('incorrectanswer.create');
    Route::get('/incorrectanswer/edit','IncorrectAnswerController@edit')->name('incorrectanswer.edit');
    Route::get('/incorrectanswer/show','IncorrectAnswerController@show')->name('incorrectanswer.show');
});



Route::get('/quiz','QuizController@index')->name('quiz.index');
//Route::get('/quiz/all','QuizController@getAll')->name('quiz.all');

