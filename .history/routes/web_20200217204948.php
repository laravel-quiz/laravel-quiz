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




Route::prefix('/admin')->group(function(){
    Route::get('/questionanswer','QuestionAnswerController@index')->name('questionanswer');
    Route::get('/questionanswer/create','QuestionAnswerController@create')->name('questionanswer.create');
    Route::post('/questionanswer','QuestionAnswerController@store')->name('quiz.store');
    Route::get('/questionanswer/edit','QuestionAnswerController@edit')->name('questionanswer.edit');
    Route::get('/questionanswer/show','QuestionAnswerController@show')->name('questionanswer.show');
    
    Route::get('/questionincorrectanswer','QuestionIncorrectAnswerController@index')->name('questionincorrectanswer');
    Route::get('/questionincorrectanswer/create','QuestionIncorrectAnswerController@create')->name('questionincorrectanswer.create');
    Route::get('/questionincorrectanswer/edit','QuestionIncorrectAnswerController@edit')->name('questionincorrectanswer.edit');
    Route::get('/questionincorrectanswer/show','QuestionIncorrectAnswerController@show')->name('questionincorrectanswer.show');
});



Route::get('/quiz','QuizController@index')->name('quiz.index');
//Route::get('/quiz/all','QuizController@getAll')->name('quiz.all');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','role']], function () {
	
    
    Route::get('/admin/dashboard','AdminController@index')->name('admin.index');
   
});
