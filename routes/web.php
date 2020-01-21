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

Route::get('/', 'Wordscontroller@index');
Route::get('/words/{word}', 'WordsController@show')->where('word','[0-9]+');
Route::get('/words/create', 'WordsController@create');
Route::post('/words', 'WordsController@store');
Route::get('/words/{word}/edit', 'WordsController@edit');
Route::patch('/words/{word}', 'WordsController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
