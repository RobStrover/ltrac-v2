<?php

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

$router->get('/test', function() use ($router) {
    return 'hello';
});

/**
 * Routes for resource job
 */
$router->get('jobs', 'JobsController@all');
$router->post('jobs', 'JobsController@add');
$router->get('jobs/{id}', 'JobsController@get');
$router->put('jobs/{id}', 'JobsController@put');
$router->delete('jobs/{id}', 'JobsController@remove');