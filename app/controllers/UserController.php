<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function doLogin()
	{
		return Redirect::to('home');
	}

	public function upload()
	{

		$input            = Input::all();
		$username		  = (isset($input['username']))         ? $input['username']                :null;
		$foto             = Input::file('file') ;    
		$destinationPath  = public_path().'/files/photos';
                $extension        = $foto->getClientOriginalExtension();
                $filename         = time()."_".str_random(12).".".$extension;
                
                $foto->move($destinationPath, $filename);
	}
}
