<?php

/** @var \Laravel\Lumen\Routing\Router $router */
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,HEAD,PUT,POST,DELETE,PATCH,OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');
$router->options('/{any:.*}', function() {
    return response(['status' => 'success']);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('volunteers', ['uses' => 'VolunteerController@getAllVolunteers']);
$router->get('volunteers/{id}', ['uses' => 'VolunteerController@getOneVolunteer']);

$router->post('volunteers', ['uses' => 'VolunteerController@createVolunteer']);

$router->put('volunteers/{id}', ['uses' => 'VolunteerController@updateVolunteers']);

$router->delete('volunteers/{id}', ['uses' => 'VolunteerController@deleteVolunteers']);

// $router->get('/test-database-connection', function () use ($router) {
//     $results = DB::table('users')->get();
//     return response()->json($results);
// });

