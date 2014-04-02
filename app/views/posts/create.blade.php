@extends('layouts.master')
	<style>
		#form-new-post{
			margin: center;
			color: #537525;
			margin-left: 240px;
			margin-bottom: 140px;
		}

		h2{
			text-align: center;
		}
	</style>
@section('content')
 
	<h2 class = "blog-title">Create New Post</h2>
	   <div id='form-new-post' class = "blog-post">
	    {{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal', 'files' => true, 'enctype' => 'multipart/form-data')) }}
			  <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
				  {{ Form::label('title', 'Title', array('class'=> 'col-sm-2 control-label'))}}
				    <div class="col-sm-5">
	                  {{ Form::text('title',  null, array('class' => 'form-control', 'placeholder' => 'Enter Title')) }}
	                  {{  $errors->first('title', '<span class="help-block">:message</span>') }}
				    </div>
			   </div>
				  <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
				   {{ Form::label('body', 'Body', array('class'=> 'col-sm-2 control-label')) }}
				    <div class="col-sm-5">
					  {{ Form::textarea('body', null, array('class' => 'form-control', 'row' => '5')) }}
				      {{  $errors->first('body', '<span class="help-block">:message</span>') }}
				    </div>
				  </div>
				 <!--Upload an image-->
				 <div class="form-group">
				     {{ Form::label('image', 'Image', array('class'=> 'col-sm-2 control-label'))}}
				     <div class="col-sm-5">
				         {{ Form::file('image') }}
				     </div>
				</div>
				  <div class="form-group">
					  <div class="col-sm-offset-2 col-sm-10">
						  <button type ="submit" class ="btn btn-primary">Create Post</button>
					  </div>
			      </div>
		{{ Form::close() }}
	    </div>    	
@stop