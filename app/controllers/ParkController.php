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

	public function destroy($id)
	{
		$park = Park::find($id);
		$park->delete();

		return Redirect::to('park');
	}

}
