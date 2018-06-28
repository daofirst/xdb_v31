<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index')->name("main");
Route::get('/home', 'HomeController@index')->name("home");
Route::get('/minor', 'HomeController@minor')->name("minor");

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/backstage/view/oauth/manager', 'HomeController@oauth');
});


Route::get('/test/auth/callback', function (\Illuminate\Http\Request $request){

    echo 1;
});
