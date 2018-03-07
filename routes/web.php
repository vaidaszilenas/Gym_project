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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*IndexController*/
Route::get('/', 'IndexController@index')->name('index');



Route::get('/supplements', 'SupplementsController@index')->name('supplements');
Route::get('/supplements-create', 'SupplementsController@create')->name('supplements-create');
Route::post('/store', 'SupplementsController@store')->name('supplements-store');
Route::get('/supplements-edit/{id}', 'SupplementsController@edit')->name('supplements-edit');
Route::post('/update/{id}', 'SupplementsController@update')->name('supplements-update');
Route::delete('/destroy/{id}', 'SupplementsController@destroy')->name('supplements-destroy');
