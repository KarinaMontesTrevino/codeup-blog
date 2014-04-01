<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Uncomment to Log Eloquent Queries */
Event::listen('illuminate.query', function($sql, $bindings, $time){
  Log::info($sql);
  Log::info(implode($bindings, ', '));
});

Route::get('/', 'HomeController@showWelcome');

Route::get('/index', 'HomeController@showHome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/contact', 'HomeController@showContact');

Route::get('/sayhello/{name}', 'HomeController@sayHello');

Route::get('/rolldice/{guess}', "HomeController@showRandom");

Route::resource('posts', 'PostsController');


