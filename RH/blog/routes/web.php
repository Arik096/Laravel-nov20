<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'SiteController@Home');

Route::get('/about', 'SiteController@About');

Route::get('/contact', 'SiteController@Contact');

Route::get('/name/{fName}/{lName}/{age}', 'DemoController@myName');



Route::group(['prefix'=>'/acc'],function(){

    Route::get('/login', function(){
        return "login";
    });
    Route::get('/signup', function(){
        return "signup";
    });
    Route::get('/logout', function(){
        return "logout";
    });
    Route::get('/profile', function(){
        return "profile";
    });
    Route::get('/edit', function(){
        return "edit";
    });
});
