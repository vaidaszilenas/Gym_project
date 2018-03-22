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
Route::get('/supplements-create', 'SupplementsController@create')->name('supplements-create')->middleware('IsAdmin');
Route::post('/store', 'SupplementsController@store')->name('supplements-store')->middleware('IsAdmin');
Route::get('/supplements-edit/{id}', 'SupplementsController@edit')->name('supplements-edit')->middleware('IsAdmin');
Route::post('/update/{id}', 'SupplementsController@update')->name('supplements-update')->middleware('IsAdmin');
Route::delete('/destroy/{id}', 'SupplementsController@destroy')->name('supplements-destroy')->middleware('IsAdmin');




/***********************about***************************/
Route::get('/about-us', 'AboutController@index')->name('about');

/* coaches */
Route::get('/coaches', 'CoachController@index')->name('coaches');
Route::get('/coaches-create', 'CoachController@create')->name('coaches-create')->middleware('IsAdmin');
Route::post('/coaches-store', 'CoachController@store')->name('coaches-store');
Route::get('/coaches-edit/{id}', 'CoachController@edit')->name('coaches-edit')->middleware('IsAdmin');
Route::post('/update/{id}', 'CoachController@update')->name('coaches-update')->middleware('IsAdmin');
Route::delete('/coaches-destroy/{id}', 'CoachController@destroy')->name('coaches-destroy')->middleware('IsAdmin');


/***********************Workout***************************/
Route::get('/workout', 'WorkoutController@index')->name('workout')->middleware('IsAdmin');
Route::get('/workout-create', 'WorkoutController@create')->name('workout-create')->middleware('IsAdmin');
Route::post('/workout-store', 'WorkoutController@store')->name('workout-store');
Route::get('/workout-show-{id}', 'WorkoutController@show')->name('workout-show');
Route::delete('/workout-destroy/{id}', 'WorkoutController@destroy')->name('workout-destroy');


Route::post('/resgistration', 'RegistrationController@store')->name('resgistration');
