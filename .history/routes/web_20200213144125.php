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

Route::get('/questionanswer','QuestionAnswerControllerController@index')->name('questionanswer.index');
Route::get('/questionanswer/create','QuestionAnswerControllerController@create')->name('questionanswer.create');
Route::get('/questionanswer/edit','QuestionAnswerControllerController@edit')->name('questionanswer.edit');
Route::get('/questionanswer/show','QuestionAnswerControllerController@show')->name('questionanswer.show');

Route::get('/questionincorrectanswer','QuestionIncorrectAnswerControllerController@index')->name('questionincorrectanswer.index');
Route::get('/questionincorrectanswer/create','QuestionIncorrectAnswerControllerController@create')->name('questionincorrectanswer.create');
Route::get('/questionincorrectanswer/edit','QuestionIncorrectAnswerControllerController@edit')->name('questionincorrectanswer.edit');
Route::get('/questionincorrectanswer/show','QuestionIncorrectAnswerControllerController@show')->name('questionincorrectanswer.show');
