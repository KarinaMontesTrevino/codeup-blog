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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/index', function()
{
	return View::make('index');
});

Route::get('/resume', function()
{
	return View::make('resume');
});

Route::get('/portfolio', function()
{
	return View::make('portfolio');
});

Route::get('/contact', function()
{
	return View::make('contact');
});

Route::get('/sayhello/{name}', function($name)
{   
	$data = array(
    	'name' => $name
	);

    return View::make('my-first-view')->with($data);
});

Route::get('/rolldice/{guess}', function($guess)
{
	$random = mt_rand(1,6);

	if ($random==$guess){
        $msg = "There is a match";
	}
	else{
		$msg = "There is not a match";
	}

	$data =  array(
		'guess' => $guess,
		'random' => $random, 
		'msg' => $msg
	);

	return View::make('roll-dice')->with($data);

});