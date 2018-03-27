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
Route::get('/chart', 'chartController@index');
Route::get('/allresult', 'allresultController@index');
Route::get('/home', 'HomeController@index');
Route::get('/verbal', 'verbalController@index');
Route::get('/code', 'codeController@index');
Route::get('/logic', 'logicController@index');
Route::get('/technical', 'technicalController@index');
Route::get('/quanti', 'quantiController@index');
Route::get('/aptitude', 'aptiController@index');
Route::get('/profiling','profilingController@index');
Route::get('/big5test','big5testController@index');
Route::get('/hollandtest','hollandController@index');
Route::get('/softskills','softskillsController@index');
Route::get('/leader','leaderController@index');
Route::get('/time','timeController@index');
Route::get('/stress','stressController@index');
Route::get('/comms','commsController@index');
Route::get('/change','changeController@index');
Route::get('/resume', function () {
    return file_get_contents(public_path().'/resume.html'); 
});

Route::get('/selfdev','selfdevController@index');
Route::get('/schedule','scheduleController@index');
Route::get('/logs','logsController@index');
Route::get('/progbar','progbarController@index');
Route::get('/statusupdate','statusupdateController@index');
Route::get('/evidence','evidenceController@index');
Route::get('/manschedule','manschedulesController@home');
Route::get('/addschedule','addschedulesController@index');
Route::POST('/insertsched','addschedulesController@add');
Route::get('/update/{id}','addschedulesController@update');
Route::post('/edit/{id}','addschedulesController@edit');
Route::get('/read/{id}','addschedulesController@read');
Route::get('/delete/{id}','addschedulesController@delete');

Route::get('/select','selectController@index');
Route::get('/leadertest','leaderTestController@index');
Route::get('/select1','select1Controller@index');
Route::get('/select2','select2Controller@index');
Route::get('/select3','select3Controller@index');
Route::get('/select4','select4Controller@index');
Route::get('/stresstest','stresstestController@index');
Route::get('/commstest','commstestController@index');
Route::get('/changetest','changetestController@index');
Route::get('/timetest','timetestController@index');
Route::get('/quantitest','quantitestController@index');
Route::get('/verbaltest','verbaltestController@index');
Route::get('/codetest', 'codetestController@index');
Route::get('/logictest', 'logictestController@index');
Route::get('/technicaltest', 'technicaltestController@index');
Route::get('/subject', 'subjectController@index');

Route::get('/students', 'studentController@index');
Route::get('/testscores', 'testscoreController@index');
Route::get('/personality', 'personalityController@index');

Route::resource('/timetestSubmit','timetestSubmitController');
Route::resource('/commstestSubmit','commstestSubmitController');
Route::resource('/changetestSubmit','changetestSubmitController');
Route::resource('/stresstestSubmit','stresstestSubmitController');
Route::resource('/quantitestSubmit','quantitestSubmitController');
Route::resource('/leadertestSubmit','leadertestSubmitController');
Route::resource('/verbaltestSubmit','verbaltestSubmitController');
Route::resource('/codetestSubmit', 'codetestSubmitController');
Route::resource('/logictestSubmit', 'logictestSubmitController');
Route::resource('/technicaltestSubmit', 'technicaltestSubmitController');
Route::resource('/hollandsubmit','hollandsubmitController');
Route::resource('/big5submit','big5submitController');
Route::resource('/jobs','jobsController');

