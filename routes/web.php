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

$router->group(['prefix' => 'api'], function () use ($router) { 
    //User endpoints
    $router->get('users', ['uses' => 'UserController@showAllUsers']); 
    $router->get('users/{id}', ['uses' => 'UserController@showOneUser']); 
    $router->post('users', ['uses' => 'UserController@create']); 
    $router->delete('users/{id}', ['uses' => 'UserController@delete']); 
    $router->put('users/{id}', ['uses' => 'UserController@update']); 

    //Message endpoints
    $router->get('messages', ['uses' => 'MessageController@showAllMessages']); 
    $router->get('messages/{id}', ['uses' => 'MessageController@showOneMessage']); 
    $router->post('messages', ['uses' => 'MessageController@create']); 
    $router->delete('messages/{id}', ['uses' => 'MessageController@delete']); 
    $router->put('messages/{id}', ['uses' => 'MessageController@update']); 
});
