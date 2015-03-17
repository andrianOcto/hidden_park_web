<?php

class ParkController extends BaseController {

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
		$park = Park::all();
		return View::make('park/home')->with('park', $park);
	}

	public function create()
	{
		return View::make('park/add-park');
	}

	public function edit($id)
	{
		$park = Park::find($id);
		return View::make('park/edit-park')->with('park', $park);
	}

	public function show($id)
	{
		$park = Park::find($id);
		return View::make('park/view-park')->with('park', $park);
	}

	public function store()
    {
    	$park 				= new Park;

    	$input 				= Input::all();
    	$nama				= (isset($input['nama_park'])) 	? $input['nama_park']:null;
    	$alamat				= (isset($input['alamat'])) 	? $input['alamat']:null;
    	$longitude			= (isset($input['longitude'])) 	? $input['longitude']:null;
    	$latitude			= (isset($input['latitude'])) 	? $input['latitude']:null;
    	$deskripsi			= (isset($input['deskripsi'])) 	? $input['deskripsi']:null;

    	$park->nama_park	= $nama;
    	$park->alamat		= $alamat;
    	$park->longitude	= $longitude;
    	$park->latitude		= $latitude;
    	$park->deskripsi	= $deskripsi;

    	$park->save();
    }

    public function update($idpark)
    {
    	$input 				= Input::all();
    	$idpark				= (isset($input['idpark'])) 	? $input['idpark']:null;
    	$nama_park			= (isset($input['nama_park'])) 	? $input['nama_park']:null;
    	$alamat				= (isset($input['alamat'])) 	? $input['alamat']:null;
    	$longitude			= (isset($input['longitude'])) 	? $input['longitude']:null;
    	$latitude			= (isset($input['latitude'])) 	? $input['latitude']:null;
    	$deskripsi			= (isset($input['deskripsi'])) 	? $input['deskripsi']:null;

    	$park 				= Park::find($idpark);

    	$park->nama_park	= $nama_park;
    	$park->alamat		= $alamat;
    	$park->longitude	= $longitude;
    	$park->latitude		= $latitude;
    	$park->deskripsi	= $deskripsi;

    	$park->save();
    }

	public function destroy($id)
	{
		$park = Park::find($id);
		$park->delete();

		return Redirect::to('park');
	}

}
