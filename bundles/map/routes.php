<?php


Route::get('reports', array('before' => 'ajax', 'do' => function(){

	if(Request::ajax())
	{
		$reports = Report::with('location')->get();

		return Response::json($reports);
	}

}));


Route::get('test', function(){


	if(Request::ajax())
	{
		$location = array(Input::get('lat'), Input::get('lng'));


		$message = array('message' => 'ok');



		return Response::json($message);

	} else

	{
		return 'no ajax';
	}

});

Route::get('reports/new', function()
{
	return View::make('map::report.new');
});



Route::post('reports/new', function(){


	$locationData = array(

		'latitude' => Input::get('lat'),

		'longitude' => Input::get('lng'),

		);


	$location = new Location($locationData);

	$location->save();

	$image = Input::file('photo');

	$filename =  Input::file('photo.name');

	Input::upload('photo', 'public/uploads', $filename);

	$reportData = array(

		'title' => Input::get('title'),

		'description' => Input::get('description'),

		'location_id' => $location->id,

		'photo'	=>	$filename
		);

	$ok = $location->report()->insert($reportData);

	$res = $ok ? 'ok' : 'error';

	$message = array('message' => $res);


	return Response::json($message);

});



Route::any('upload', function()
{
	if(Request::method() == 'POST')
	{
		$file = Input::file('file');

	$filename =  Input::file('file.name');

	Input::upload('file', 'public/uploads', $filename);

	$s = URL::to_asset('uploads/'.$filename);

	return '<img src="'.$s.'">';
	}

	return View::make('upload_form');
});
?>