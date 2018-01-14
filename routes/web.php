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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/profiling','profilingController@index');
Route::get('/big5test','big5testController@index');
Route::get('/hollandtest','hollandController@index');
Route::get('/softskills','softskillsController@index');

Route::resource('/hollandsubmit','hollandsubmitController');
Route::resource('/big5submit','big5submitController');
Route::resource('/jobs','jobsController');

