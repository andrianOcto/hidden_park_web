<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::controller('api','ApiController');
Route::post('/', array('uses' => 'UserController@doLogin'));

// submit user's data route
Route::post('/submit', array('uses' => 'ApiController@postUserData'));
// submit park's data route
Route::post('/submitPark', array('uses' => 'ApiController@postParkData'));

Route::post('setSession', array('uses' => 'AuthController@postSetsession'));
Route::post('user/upload', array('uses' => 'UserController@upload'));
Route::group(array('before' => 'guest'), function() {
	Route::get('/', function()
	{
		return View::make('login');
	});
});
Route::get('/submit','ApiController@postUserData');

Route::group(array('before' => 'auth'), function() {

	//menu utama
	Route::get('/home', function()
	{
		return View::make('home');
	});

	Route::get('logout', 'AuthController@doLogout');

	// resource route user
	Route::resource('user','UserController');

	// resource route park
	Route::resource('park', 'ParkController');

	// user delete route
	Route::get('user/{id}/destroy',['as'=>'user.delete','uses'=>'UserController@destroy']);
	// park delete route
	Route::get('park/{id}/destroy',['as'=>'park.delete','uses'=>'ParkController@destroy']);
});




