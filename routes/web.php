<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\UserPaymentController;
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
$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});

/* $router->group(['prefix' => 'api'], function () use ($router){
    $router->get('/user_payments', 'UserPaymentController@index');
}); */

/* $router->get('/user_payments', function () {
    return 'Hello World';
}); */

$router->get('/user_payments', 'UserPaymentController@prueba');