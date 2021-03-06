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

Route::post('/logger', 'LoggingController@store');

//Route::any('/logger', function(\Illuminate\Http\Request $request) {
//    \Log::info(json_encode($request->all()));
//});

Route::resource('/applications', 'ApplicationController');
Route::resource('/apiKeys', 'ApiKeyController');
Route::resource('/loggedEvents', 'LoggedEventController');
