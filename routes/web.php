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
Route::get('/task', ['uses'=>'TaskController@index','as'=>'task.index'])->middleware('auth');
Route::get('/task/create', ['uses'=>'TaskController@create','as'=>'task.create'])->middleware('auth');
Route::post('/task/store', ['uses'=>'TaskController@store','as'=>'task.store'])->middleware('auth');
Route::get('/task/{id}/edit', ['uses'=>'TaskController@edit','as'=>'task.edit'])->middleware('auth');
Route::put('/task/{id}/update', ['uses'=>'TaskController@update','as'=>'task.update'])->middleware('auth');
Route::get('/task/{id}/show', ['uses'=>'TaskController@show','as'=>'task.show'])->middleware('auth');
Route::delete('/task/{id}/delete', ['uses'=>'TaskController@destroy','as'=>'task.destroy'])->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
