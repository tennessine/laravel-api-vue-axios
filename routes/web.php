<?php

use GuzzleHttp\Client as GuzzleClient;

Route::get('/weather', function () {
	$client = new GuzzleClient();

	$latitude = 40.637696;
	$longitude = 109.849633;
	$response = $client->get("https://apis.map.qq.com/ws/geocoder/v1", [
		'query' => [
			'location' => "$latitude,$longitude",
			'key' => '3NCBZ-5LOCO-7QBW6-SDFTB-J44ZE-7OFEW',
		],
	]);
	$body = json_decode($response->getBody(), true);
	return $body;
});

Route::get('/', function () {
	return view('welcome');
});
