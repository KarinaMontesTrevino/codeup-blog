@extends('layouts.master')

@section('content')
       
       <div id="formlogin">
       {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin', 'role'=>'form', 'method'=>'POST')) }}
	        <h2 class="form-signin-heading">Sign in</h2>
		    {{ Form::label('email', 'Email') }}
		    {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
		    {{ Form::label('password', 'Password') }}
	        {{ Form::password('password', array('class' => 'form-control')) }}
	        <label class="checkbox">
	          <input type="checkbox" value="remember-me" checked> Remember me
	        </label>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      {{ Form::close() }}
           <div class = "text-center"> 
	           <h4> Not an existing user?</h4>
	            <a href = "{{{ action('HomeController@createAccount') }}}"> Sign Up!</a>
	       </div>
       </div>
@stop