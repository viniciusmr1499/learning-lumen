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

$router->get('/', function () use ($router) {
    return 'Primeira API REST com LUMEN...' . $router->app->version();
});

$router->group(['prefix' => 'courses'], function () use ($router) {
    $router->get('/', 'CourseController@index');
    $router->get('/{courseId}', 'CourseController@show');

    $router->post('/', 'CourseController@store');
    $router->put('/{courseId}', 'CourseController@update');
    $router->delete('/{courseId}', 'CourseController@destroy');
});