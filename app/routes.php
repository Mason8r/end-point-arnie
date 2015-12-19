<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| 1. Store data in a database - Done!
| 2. Add a view to the buckets using Blade - Done!
| 3. Split the buckets up for different users - Done!
| 4. Empty that database nightly!
|
*/
Route::match(array('GET', 'POST'),'/{name?}', function($name = null)
{
	if(!$name) {

		return View::make('home');

	} else {

		if(Input::has('inspect')) {
			$web_requests = WebRequest::where('name',$name)->orderBy('created_at', 'desc')->get();
			return View::make('bin' , ['web_requests' => $web_requests, 'name' => $name]);
		} else {
			WebRequest::create(['name' => $name,'payload' => serialize(Request::all()), 'server' => serialize(Request::server())]);
			return Response::json(['status' => 'success', 'payload' => Request::all()], 200);
		}

	}
});
