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

Route::get('/admindashoard','AdminController@index');

Route::get('/questionanswer','QuestionAnswerController@index')->name('questionanswer');
Route::get('/questionanswer/create','QuestionAnswerController@create')->name('questionanswer.create');
Route::get('/questionanswer/edit','QuestionAnswerController@edit')->name('questionanswer.edit');
Route::get('/questionanswer/show','QuestionAnswerController@show')->name('questionanswer.show');

Route::get('/questionincorrectanswer','QuestionIncorrectAnswerControllerController@index')->name('questionincorrectanswer');
Route::get('/questionincorrectanswer/create','QuestionIncorrectAnswerControllerController@create')->name('questionincorrectanswer.create');
Route::get('/questionincorrectanswer/edit','QuestionIncorrectAnswerControllerController@edit')->name('questionincorrectanswer.edit');
Route::get('/questionincorrectanswer/show','QuestionIncorrectAnswerControllerController@show')->name('questionincorrectanswer.show');
