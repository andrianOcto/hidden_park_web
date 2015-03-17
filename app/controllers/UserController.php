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

	public function index()
	{
		$admin = Admin::all();
		return View::make('user/home')->with('admin', $admin);
	}

	public function create()
	{
		return View::make('user/create-user');
	}

	public function edit($id){
		$admin = Admin::find($id);

		return View::make('user/edit-user')->with('admin', $admin);
	}

	public function show($id)
	{
		$admin = Admin::find($id);

		return View::make('user/view-user')->with('admin', $admin);
	}

	public function destroy($id)
	{
		$admin = Admin::find($id);
		$admin->delete();

		return Redirect::to('user');
	}

	public function store(){
    	$admin 					= new Admin;

    	$input	 				= Input::all();
    	$nama					= (isset($input['nama'])) 		? $input['nama']:null;
    	$username				= (isset($input['username'])) 	? $input['username']:null;
		$password				= (isset($input['password'])) 	? $input['password']:null;
		$email					= (isset($input['email'])) 		? $input['email']:null;
		$contact				= (isset($input['contact'])) 	? $input['contact']:null;
		$bio					= (isset($input['bio'])) 		? $input['bio']:null;

		$admin->nama_lengkap	= $nama;
		$admin->username	 	= $username;
		$admin->password	 	= $password;
		$admin->email	 		= $email;
		$admin->bio	 			= $bio;
		$admin->contact 		= $contact;

		$admin->save();
    }

    public function update($iduser)
    {
    	$input	 				= Input::all();
    	$iduser 				= (isset($input['iduser'])) 	? $input['iduser']:null;
    	$nama					= (isset($input['nama'])) 		? $input['nama']:null;
    	$username				= (isset($input['username'])) 	? $input['username']:null;
		$password				= (isset($input['password'])) 	? $input['password']:null;
		$email					= (isset($input['email'])) 		? $input['email']:null;
		$contact				= (isset($input['contact'])) 	? $input['contact']:null;
		$bio					= (isset($input['bio'])) 		? $input['bio']:null;

		$admin 					= Admin::find($iduser);

		$admin->nama_lengkap	= $nama;
		$admin->username	 	= $username;
		$admin->password	 	= $password;
		$admin->email	 		= $email;
		$admin->bio	 			= $bio;
		$admin->contact 		= $contact;

		$admin->save();	
    }

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
