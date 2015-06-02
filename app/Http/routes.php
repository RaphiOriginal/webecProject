<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
$app->post('/api/create-user', 'App\Http\Controllers\UserController@store');
$app->get('/', function() use ($app) {
	return view('index');
});
$app->get('/Korbball', function() use ($app) {
	return view('korbball');
});
$app->get('/Leichtathletik', function() use ($app) {
	return view('leichtathletik');
});
$app->get('/Aerobic', function() use ($app) {
	return view('aerobic');
});
$app->get('/Events', function() use ($app) {
	return view('events');
});
$app->get('/Profile', function() use ($app) {
	return view('profile');
});
$app->get('/CreateEvent', function() use ($app) {
	return view('createEvent');
});
$app->get('/Event', function() use ($app) {
	return view('event');
});
$app->get('/Regrister', function() use ($app) {
	return view('regrister');
});