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
    return view('templates.master');
});

// Route::get('/pertanyaan', 'PertanyaanController@index');

// Route::get('/pertanyaan/tambah', 'PertanyaanController@create');

// Route::post('/pertanyaan', 'PertanyaanController@insert');

// Route::get('/pertanyaan/{questions_id}', 'PertanyaanController@show');

// Route::delete('/pertanyaan/{questions_id}', 'PertanyaanController@destroy');

// Route::get('/pertanyaan/{questions_id}/edit', 'PertanyaanController@edit');

// Route::put('/pertanyaan/{questions_id}', 'PertanyaanController@update');

Route::resource('pertanyaan', 'QuestionsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');

Route::resource('jawaban', 'AnswerController');
