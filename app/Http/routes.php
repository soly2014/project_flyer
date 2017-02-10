<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



//Route::get('{zip}/{street}','FlyerController@show');

Route::resource('flyer','FlyerController');

Route::get('flyer/{zip}/{street}','FlyerController@show');

Route::post('{zip}/{street}/file_upload','FlyerController@addPhoto');





