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
Route::post('setSession', array('uses' => 'AuthController@postSetsession'));

Route::group(array('before' => 'guest'), function() {
	Route::get('/', function()
	{
		return View::make('login');
	});
});

Route::group(array('before' => 'auth'), function() {
	Route::get('/home', function()
	{
		return View::make('home');
	});
	Route::get('logout', 'AuthController@doLogout');
});


