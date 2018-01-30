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
Route::get('/leader','leaderController@index');
Route::get('/time','timeController@index');
Route::get('/stress','stressController@index');
Route::get('/comms','commsController@index');
Route::get('/change','changeController@index');
Route::get('/select','selectController@index');
Route::get('/leadertest','leaderTestController@index');
Route::get('/select1','select1Controller@index');
Route::get('/timetest','timetestController@index');

Route::resource('/timetestSubmit','timetestSubmitController');
Route::resource('/leadertestSubmit','leadertestSubmitController');
Route::resource('/hollandsubmit','hollandsubmitController');
Route::resource('/big5submit','big5submitController');
Route::resource('/jobs','jobsController');

