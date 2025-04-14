<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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


//matches localhost:8888/lumen/public/
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/countries', 'CountryController@getAll');
$router->get('/countries/{id}', 'CountryController@getOne');
$router->post('/countries/add', 'CountryController@save');


$router->get('/cities', 'CityController@getAll');
$router->get('/cities/{id}', 'CityController@getOne');

$router->get('/activities', 'ActivityController@getAll');
$router->get('/activities/{id}', 'ActivityController@getOne');










