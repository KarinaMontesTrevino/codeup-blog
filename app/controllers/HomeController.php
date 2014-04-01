<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    // Actions
	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showHome()
	{
		return View::make('index');
	}
    
    public function showResume()
    {
    	return View::make('resume');
    }

    public function showPortfolio()
    {
    	return View::make('portfolio');
    }

    public function showContact()
    {
    	return View::make('contact');
    }

    public function sayHello($name)
    {

		$data = array(
    		'name' => $name
		);

      return View::make('my-first-view')->with($data);
    }
    
    public function showRandom($guess)
    {

		$random = mt_rand(1,6);

	    ($random==$guess) ? $msg = "There is a match" : $msg = "There is not a match";
		
		$data =  array(
			'guess' => $guess,
			'random' => $random, 
			'msg' => $msg
		);

		return View::make('roll-dice')->with($data);
    }

    public function showLogin()
    {
    	return View::make('login');
    }

    public function doLogin()
    {
    	$eMail = Input::get('email');
    	$password = Input::get('password');

    	if (Auth::attempt(array('email' => $eMail, 'password' => $password)))
		{
		    return Redirect::intended('/posts');
		}
		else
		{
		    Session::flash('loginError', 'Login failed! Try again');
		    return Redirect::back()->withInput();
		}
	}

	public function logout()
    {
    	Auth::logout();
    	return Redirect::action("PostsController@index");	
    }

}