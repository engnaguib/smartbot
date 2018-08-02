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

Route::get('/','BotController@index');
Route::get('/Bot','BotController@index');
Route::get('Bot/add','BotController@create');
Route::post('Bot/create','BotController@store');
Route::get('Bot/edit/{id}','BotController@edit');
Route::post('Bot/update/{id}','BotController@update');
