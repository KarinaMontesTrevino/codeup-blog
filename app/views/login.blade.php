@extends('layouts.master')

@section('content')
       
       <div id="formlogin">
       {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
	        <h2 class="form-signin-heading">Sign in</h2>
	        <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
	        <input name="password" type="password" class="form-control" placeholder="Password" required>
	        <label class="checkbox">
	          <input type="checkbox" value="remember-me" checked> Remember me
	        </label>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      {{ Form::close() }}
       </div>
@stop