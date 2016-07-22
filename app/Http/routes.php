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

if (!App::runningInConsole()) {
    function _l() {
        l('routes', request());
    }

    register_shutdown_function('_l');
}
