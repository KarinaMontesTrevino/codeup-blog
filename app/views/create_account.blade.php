@extends('layouts.master')

@section('content')
       
       <div id="formlogin">
       {{ Form::open(array('action' => 'HomeController@storeAccount', 'class' => 'form-signin', 'role'=>'form', 'method'=>'POST')) }}
	        <h2 class="form-signin-heading">Sign Up</h2>
		    {{ Form::label('first_name', 'First Name') }}
		    {{ Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'First Name')) }}
		    {{ Form::label('last_name', 'Last Name') }} 
		    {{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name')) }}
		    {{ Form::label('email', 'Email') }}
		    {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
		    {{ Form::label('password', 'Password') }}
	        {{ Form::password('password', array('class' => 'form-control')) }}
	        {{ Form::label('password_confirmation', 'Confirm Password') }}
	        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
	        <label class="checkbox">
	          <input type="checkbox" value="remember-me" checked> Remember me
	        </label>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
      {{ Form::close() }}
@stop