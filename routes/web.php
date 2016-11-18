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

$app->get('/', function () use ($app) {
    return $app->version();
});


// 客戶相關
$app->group(['prefix' => '/customer', 'namespace' => 'Customer'], function () use ($app) {
    $app->get('/', 'CustomerController@index');
    $app->post('/', 'CustomerController@store');
    $app->put('/{id}', 'CustomerController@update');
    $app->delete('/{id}', 'CustomerController@delete');
});