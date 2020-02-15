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

Route::get('/questionincorrectanswer','AdminController@index')->name('questionanswer.index');
Route::get('/questionincorrectanswer/create','AdminController@create')->name('questionanswer.create');
Route::get('/questionincorrectanswer/edit','AdminController@edit')->name('questionanswer.edit');
Route::get('/questionincorrectanswer/show','AdminController@show')->name('questionanswer.show');
