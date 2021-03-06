<?php

use App\Event;
use App\Department;

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
//echo phpinfo();

$app->post('/Regrister', 'App\Http\Controllers\UserController@store');
$app->post('/api/create-event', 'App\Http\Controllers\EventController@store');
$app->get('/api/get-user', 'App\Http\Controllers\UserController@index');
$app->post('/Login', 'App\Http\Controllers\LoginController@auth');
$app->get('/Logout', 'App\Http\Controllers\LoginController@logout');
$app->get('/AddEvent/{id}', 'App\Http\Controllers\UserController@eventAdder');
$app->get('/RemoveEvent/{id}', 'App\Http\Controllers\UserController@eventRemover');
$app->get('/department/{id}', 'App\Http\Controllers\ViewController@department');
$app->get('/', ['as' => 'index', 'uses' => 'App\Http\Controllers\ViewController@index']);
$app->get('/Events', ['as' => 'events', 'uses' => 'App\Http\Controllers\ViewController@events']);
$app->get('/Profile', ['as' => 'profile', 'uses' => 'App\Http\Controllers\ViewController@profile']);
$app->get('/CreateEvent', 'App\Http\Controllers\ViewController@createEvent');
$app->get('/Event/{id}', 'App\Http\Controllers\ViewController@event');
$app->get('/Regrister', 'App\Http\Controllers\ViewController@regrister');
$app->get('/DeleteMe', 'App\Http\Controllers\UserController@delete');
$app->get('/RemoveDepartment/{id}', 'App\Http\Controllers\UserController@departmentRemover');
$app->get('/AddDepartment/{id}', 'App\Http\Controllers\UserController@departmentAdder');
$app->post('/saveStv', 'App\Http\Controllers\UserController@changeStv');
$app->post('/saveAdress', 'App\Http\Controllers\UserController@changeAdress');
$app->post('/saveEmail', 'App\Http\Controllers\UserController@changeEmail');
$app->post('/saveTitle', 'App\Http\Controllers\EventController@changeTitle');
$app->post('/saveItems', 'App\Http\Controllers\EventController@changeItems');
$app->post('/saveLocation', 'App\Http\Controllers\EventController@changeLocation');
$app->post('/saveAmount', 'App\Http\Controllers\EventController@changeAmount');
$app->post('/saveDatetime', 'App\Http\Controllers\EventController@changeDateTime');
$app->post('/saveDescription', 'App\Http\Controllers\EventController@changeDescription');
$app->get('/DeleteEvent/{id}', 'App\Http\Controllers\EventController@delete');