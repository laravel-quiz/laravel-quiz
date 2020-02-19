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
});




Route::get('/quiz','QuizController@index')->name('quiz.index');
//Route::get('/quiz/all','QuizController@getAll')->name('quiz.all');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => ['auth','role']], function () {


//     Route::get('/admin/dashboard','AdminController@index')->name('admin.index');

//     Route::prefix('/admin')->group(function(){
//         Route::get('/questionanswer','QuestionAnswerController@index')->name('questionanswer');
//         Route::get('/questionanswer/create','QuestionAnswerController@create')->name('questionanswer.create');
//         Route::post('/questionanswer','QuestionAnswerController@store')->name('quiz.store');
//         Route::get('/questionanswer/edit','QuestionAnswerController@edit')->name('questionanswer.edit');
//         Route::get('/questionanswer/show','QuestionAnswerController@show')->name('questionanswer.show');

//         Route::get('/questionincorrectanswer','QuestionIncorrectAnswerController@index')->name('questionincorrectanswer');
//         Route::get('/questionincorrectanswer/create','QuestionIncorrectAnswerController@create')->name('questionincorrectanswer.create');
//         Route::get('/questionincorrectanswer/edit','QuestionIncorrectAnswerController@edit')->name('questionincorrectanswer.edit');
//         Route::get('/questionincorrectanswer/show','QuestionIncorrectAnswerController@show')->name('questionincorrectanswer.show');
//     });

// });
