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

$router->get('api/heroes', 'HeroesController@showAll');

$router->get('api/heroes/{id}', 'HeroesController@show');

$router->get('api/heroes/add', 'HeroesController@add');

$router->get('api/heroes/{id}/edit', 'HeroesController@edit');

$router->get('api/heroes/{id}/delete', 'HeroesController@delete');
