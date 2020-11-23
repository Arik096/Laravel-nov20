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

$router->get('/get', function () use ($router) {
    return 'get';
});

$router->post('/post', function () use ($router) {
    return 'post';
});

$router->put('/put', function () use ($router) {
    return 'put';
});

$router->delete('/delete', function () use ($router) {
    return 'delete';
});


$router->post('/arik',function(){
    return 'arik md isthiaque';
});

$router->post('/{name}/{age}[/{city}]',function($name,$age,$city=NULL){
    return $name.$age.$city;
});

$router->get('/{myfunc}','MyController@Myfunction');

$router->get('/','MyController@Myfunction');
