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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/add_offer', 'HomeController@addOffer');
Route::get('/show_offers', 'HomeController@showOffers');
Route::post('/add_offer', 'HomeController@postOffer');
Route::post('/image/clear', 'HomeController@clearImage');

Route::get('/add_notification', 'HomeController@addNotification');
Route::post('/add_notification', 'HomeController@postNotification');


Route::get('/api/images', function()
{
       
       $paths = \App\Photos::pluck('path');

       return response()->json(['images'=>$paths]);
});

Route::post('add_offers','HomeController@postOffers');


Route::post('/add_tokens', function(Illuminate\Http\Request $request)
{

         $content = $request->getContent();

         $data = json_decode($content, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

         if (\App\APITokens::where('user_id',$data['user_id'])->first()) {
         	
         	$tok = \App\APITokens::where('user_id',$data->user_id)->first();
         	$tok->token = $data['token'];
         	$tok->save();

         } else {

         	$new = new \App\APITokens();
         	$new->user_id = $data['user_id'];
         	$new->user_id = $data['token'];
         	$new->save();
         }

       return response()->json(['images'=>'added']);

});












