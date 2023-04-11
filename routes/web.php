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
$router->post('/admin/login', 'AdminController@login');

$router->group(['prefix' => 'admin'], function () use ($router) {

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('volunteers', ['uses' => 'VolunteerController@getAllVolunteers']);

$router->post('/volunteers/create', ['uses' => 'VolunteerController@createAdminVolunteer']);
$router->post('/volunteers/createUser', ['uses' => 'VolunteerController@createAdminVolunteerPage']);

$router->get('/volunteers/{id}/edit', 'VolunteerController@editVolunteer');

$router->put('volunteers/{id}', ['uses' => 'VolunteerController@updateVolunteer']);

$router->get('volunteers/{id}', ['uses' => 'VolunteerController@getOneVolunteer']);


$router->delete('volunteers/{id}', ['uses' => 'VolunteerController@deleteVolunteer']);
});

$router->post('volunteers', ['uses' => 'VolunteerController@createVolunteer']);


$router->post('newsletter/create', ['uses' => 'NewsletterController@create']);
