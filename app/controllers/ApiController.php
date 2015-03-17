<?php

class ApiController extends BaseController {
	
	//Route to halaman index
	public function getIndex()
	{
		echo "welcome to PLNRBBDist3 api";
	}

	//Route to login API
	public function getLogin()
	{	
		//initialisation
		$returnData			= array();
		$response			= "FAILED";
		$statusCode			= 400;
		$result				= null;
		$message			= "Something wrong.";
		$isError			= true;
		$missingParameter	= null;

		$input				= Input::all();
		$username			= (isset($input['username'])) ? $input['username']:null;
		$password			= (isset($input['password'])) ? $input['password']:null;

		//if username didn't set
		if(!isset($input['username'])){
			$missingParameter[] = "username";
		}

		//if password didn't set
		if(!isset($input['password'])){
			$missingParameter[] = "password";
		}

		//set message error
		if(isset($missingParameter))
		{
			$message = "Missing parameters : {".implode(', ', $missingParameter)."}";
		}
		else
		{
			$isError = false;
		}

		//if valid
		if(!$isError)
		{
			$user = User::find($username);
			
			//user found
			if(isset($user))
			{
				//check password
				if (Hash::check($password, $user->password))
				{
					$response 	= "OK";
					$statusCode = 200;
					$message 	= "Login success.";
				}
				//if password did not match
				else
				{
					$response 	= "FAILED";
					$statusCode = 200;
					$message 	= "Username and password did not match.";
				}
			}
			//if username not found
			else
			{
				$response 	= "FAILED";
				$statusCode = 200;
				$message 	= "Username not found.";
			}
		}

		$returnData = array(
            'response' => $response,
            'status_code' => $statusCode,
            'message' => $message,
            'result' => $result
        );

		//response using JSON text
		return Response::json($returnData, $statusCode)->header('access-control-allow-origin', '*');
	}

	//handling missing method
	public function missingMethod($parameters = array()) {
        echo "API not found. \n";
    }

    // post user's data
    public function postUserData(){
    	$admin 				= new Admin;

    	$input 				= Input::all();
    	$nama				= (isset($input['nama'])) 		? $input['nama']:null;
    	$username			= (isset($input['username'])) 	? $input['username']:null;
		$password			= (isset($input['password'])) 	? $input['password']:null;
		$email				= (isset($input['email'])) 		? $input['email']:null;
		$contact			= (isset($input['contact'])) 	? $input['contact']:null;
		$bio				= (isset($input['bio'])) 		? $input['bio']:null;

		
		$admin->nama_lengkap	= $nama;
		$admin->username	 	= $username;
		$admin->password	 	= $password;
		$admin->email	 		= $email;
		$admin->bio	 			= $bio;
		$admin->contact 		= $contact;

		$admin->save();
    }

    // post park's data
    public function postParkData()
    {
    	$park 				= new Park;

    	$input 				= Input::all();
    	$nama				= (isset($input['nama_park'])) 	? $input['nama_park']:null;
    	$alamat				= (isset($input['alamat'])) 	? $input['alamat']:null;
    	$longitude			= (isset($input['longitude'])) 	? $input['longitude']:null;
    	$deskripsi			= (isset($input['deskripsi'])) 	? $input['deskripsi']:null;

    	$park->nama_park	= $nama;
    	$park->alamat		= $alamat;
    	$park->longitude	= $longitude;
    	$park->deskripsi	= $deskripsi;

    	$park->save();
    }
}

