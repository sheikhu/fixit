<?php


Route::get('reports', function(){

	if(Request::ajax())
	{
		$reports = Report::all();

		return Response::json($reports);
	}

});


Route::get('test', function(){

	sleep(1);
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



Route::post('reports/new', function(){



	$locationData = array(

		'latitude' => Input::get('lat'),

		'longitude' => Input::get('lng'),

		);


	$location = new Location($locationData);

	$location->save();



	$reportData = array(

		'title' => Input::get('title'),

		'description' => Input::get('description'),

		'location_id' => $location->id
		);

		$ok = $location->report()->insert($reportData);

		$res = $ok ? 'ok' : 'error';

	$message = array('message' => $res);


	return Response::json($message);



});
 ?>