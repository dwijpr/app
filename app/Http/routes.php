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

Route::get('/', function () {
    return view('welcome');
});

$router->get('/home', [
    'uses' => 'HomeController@index',
    'middleware' => 'auth',
]);
$router->get('/home/weekly', [
    'uses' => 'HomeController@week',
    'middleware' => 'auth',
]);
$router->post('/home', [
    'uses' => 'HomeController@store',
    'middleware' => 'auth',
]);
$router->patch('/home/{pay}', [
    'uses' => 'HomeController@update',
    'middleware' => 'auth',
]);
$router->delete('/home/{pay}', [
    'uses' => 'HomeController@destroy',
    'middleware' => 'auth',
]);

Route::group([
    'middleware' => 'auth',
], function ($router) {
    $router->resource('/item', 'ItemController');
    $router->resource('/pay', 'PayController');
});
