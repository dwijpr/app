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

Route::get('refresh-csrf', function () {
    return csrf_token();
});
$router->get('/api/{user}', [
    'uses' => 'ApiController@index',
    'middleware' => 'auth',
]);

Route::get('/', [
    'uses' => function () {
        return view('welcome');
    },
    'middleware' => 'guest',
]);

Route::auth();

$router->get('/home', [
    'uses' => 'HomeController@index',
    'middleware' => 'auth',
]);
$router->get('/{image}/{option?}', [
    'uses' => 'HomeController@show',
]);
$router->delete('/{image}', [
    'uses' => 'HomeController@destroy',
]);
$router->post('/home', [
    'uses' => 'HomeController@store',
    'middleware' => 'auth',
]);

$router->group([
    'middleware' => [
        'auth', 'roles',
    ],
    'roles' => 'admin',
], function ($router) {
    $router->resource('/image', 'ImageController');
});
