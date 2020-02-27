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

})->middleware('router');

Route::middleware(['auth','role'])->prefix('/admin')->group(function(){
    Route::get('/dashboard','AdminController@index')->name('admin.index');

    Route::get('/user', 'UserController@index')->name('users.index');
    Route::get('/user/create', 'UserController@create')->name('users.create');
    Route::post('/user/store', 'UserController@store')->name('users.store');
    Route::get('/user/{id}', 'UserController@show')->name('users.show');
    Route::get('/user/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::put('/user/{id}', 'UserController@update')->name('users.update');
    Route::delete('/user/{id}', 'UserController@destroy')->name('users.destory');

    Route::get('/change/password', 'ChangePasswordController@create')->name('change.password');
    Route::post('/change/password/store', 'ChangePasswordController@store')->name('changepassword.store');

    Route::get('/questionanswer','QuestionAnswerController@index')->name('questionanswer');
    Route::get('/questionanswer/create','QuestionAnswerController@create')->name('questionanswer.create');
    Route::post('/questionanswer/store','QuestionAnswerController@store')->name('questionanswer.store');
    Route::get('/questionanswer/{id}/edit','QuestionAnswerController@edit')->name('questionanswer.edit');
    Route::put('/questionanswer/{id}','QuestionAnswerController@update')->name('questionanswer.update');
    Route::get('/questionanswer/{id}','QuestionAnswerController@show')->name('questionanswer.show');
    Route::delete('/questionanswer/{id}','QuestionAnswerController@destroy')->name('questionanswer.destroy');

    Route::get('/incorrectanswer','IncorrectAnswerController@index')->name('incorrectanswer');
    Route::get('/incorrectanswer/create','IncorrectAnswerController@create')->name('incorrectanswer.create');
    Route::post('/incorrectanswer/store','IncorrectAnswerController@store')->name('incorrectanswer.store');
    Route::get('/incorrectanswer/{id}/edit','IncorrectAnswerController@edit')->name('incorrectanswer.edit');
    Route::put('/incorrectanswer/{id}','IncorrectAnswerController@update')->name('incorrectanswer.update');
    Route::get('/incorrectanswer/{id}','IncorrectAnswerController@show')->name('incorrectanswer.show');
    Route::delete('/incorrectanswer/{id}','IncorrectAnswerController@destroy')->name('incorrectanswer.destroy');

    Route::get('/category','CategoryController@index')->name('category');
    Route::get('/category/create','CategoryController@create')->name('category.create');
    Route::post('/category/store','CategoryController@store')->name('category.store');
    Route::get('/category/{id}/edit','CategoryController@edit')->name('category.edit');
    Route::put('/category/{id}','CategoryController@update')->name('category.update');
    Route::get('/category/{id}','CategoryController@show')->name('category.show');
    Route::delete('/category/{id}','CategoryController@destroy')->name('category.destroy');
});

Route::middleware('auth')->group(function(){
    Route::get('/quiz','QuizController@index')->name('quiz.index')->middleware('auth');

});

//Route::get('/quiz/all','QuizController@getAll')->name('quiz.all');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/export/excel/recentplayer', 'ExcelController@recentplayer')->name('excel.recentplayer');
Route::get('/export/excel/topplayer', 'ExcelController@topplayer')->name('excel.topplayer');
