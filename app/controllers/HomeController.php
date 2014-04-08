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
			Session::flash('LoginMsg', 'Login sucessfully.');
		}
		else
		{
		    return Redirect::back()->withInput();
		    Session::flash('loginError', 'Login failed! Try again');
		}

		
	}

	public function createAccount()
    {
        return View::make('create_account');

	}

	public function storeAccount()
	{
		// create the validator
	    $validator = Validator::make(Input::all(), User::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {    
	    	 Session::flash('errorMessage', 'User could not be created - see form errors.');
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {
	        // validation succeeded, create and save the post
	        $user = new User();
	        $user->role_id = User::ROLE_USER;
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->eMail = Input::get('email');
			$user->password = Input::get('password');
           
			$user->save();
            Session::flash('successMessage', 'User created sucessfully.');
            return Redirect::action('HomeController@showLogin');
	    }
	}

	public function logout()
    {
    	Auth::logout();
    	return Redirect::action("PostsController@index");	
    }


}