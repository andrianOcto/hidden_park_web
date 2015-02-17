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
Route::post('user/upload', array('uses' => 'UserController@upload'));
Route::group(array('before' => 'guest'), function() {
	Route::get('/', function()
	{
		return View::make('login');
	});
});

Route::group(array('before' => 'auth'), function() {

	//menu utama
	Route::get('/home', function()
	{
		return View::make('home');
	});
	Route::get('/user', function()
	{
		return View::make('user/home');
	});
	Route::get('/park', function()
	{
		return View::make('park/home/test');
	});

	//user route
	Route::get('/user/view', function()
	{
		return View::make('user/view-user');
	});
	
	Route::get('/user/edit', function()
	{
		return View::make('user/edit-user');
	});

	//route park
	Route::get('/park/view', function()
	{
		return View::make('park/view-park');
	});
	
	Route::get('/park/edit', function()
	{
		return View::make('park/add-park');
	});

	Route::get('logout', 'AuthController@doLogout');
});


