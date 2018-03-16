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




/***********************about***************************/
Route::get('/about-us', 'AboutController@index')->name('about');

/* coaches */
Route::get('/coaches', 'CoachController@index')->name('coaches');
Route::get('/coaches-create', 'CoachController@create')->name('coaches-create');
Route::post('/coaches-store', 'CoachController@store')->name('coaches-store');
Route::get('/coaches-edit/{id}', 'CoachController@edit')->name('coaches-edit');
Route::post('/update/{id}', 'CoachController@update')->name('coaches-update');
Route::delete('/coaches-destroy/{id}', 'CoachController@destroy')->name('coaches-destroy');


/***********************Workout***************************/
Route::get('/workout', 'WorkoutController@index')->name('workout');
Route::get('/workout-create', 'WorkoutController@create')->name('workout-create');
Route::post('/workout-store', 'WorkoutController@store')->name('workout-store');
// Route::get('/workout-edit/{id}', 'WorkoutController@edit')->name('workout-edit');
// Route::post('/workout-update/{id}', 'WorkoutController@update')->name('workout-update');
// Route::delete('/workout-destroy/{id}', 'WorkoutController@destroy')->name('workout-destroy');
