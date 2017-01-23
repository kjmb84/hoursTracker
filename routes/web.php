<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', 'HoursController@showAll');

Route::get('/list/{user}', 'HoursController@show');

Route::get('/users', 'HoursController@listAllUsers');

Route::post('/list/{user}/getTimes', 'AjaxController@getTimes');

Route::get('/list/{user}/getTimes', 'AjaxController@getTimes');