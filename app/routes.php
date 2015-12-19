<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| 1. Store data in a database - Done!
| 2. Add a view to the buckets using Blade - Done!
| 3. Split the buckets up for different users
| 4. Empty that database nightly!
|
*/
Route::match(array('GET', 'POST'),'/', function()
{
	if(Input::has('inspect')) {
		$web_requests = WebRequest::orderBy('created_at', 'desc')->get();
		return View::make('home' , ['web_requests' => $web_requests]);
	} else {
		WebRequest::create(['payload' => serialize(Request::all()), 'server' => serialize(Request::server())]);
		return Response::json(['status' => 'success', 'payload' => Request::all()], 200);
	}
});
