@extends('layouts.master')
    <style>
		#form-edit-post{
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

<h2 class = "blog-title">Edit Post</h2>

   <div id='form-edit-post' class = "blog-post">
    {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put', 'class' => 'form-horizontal', 'files' => true, 'enctype' => 'multipart/form-data')) }}
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
				     @if(!empty($post->image_path))
				         {{ Form::label('image', 'Update Image', array('class'=> 'col-sm-2 control-label'))}}
				         <div class="col-sm-5">
					         {{ Form::file('image') }}
					         {{ Form::label('delete', 'Delete Image')}}
						     {{ Form::checkbox('delete', 'delete', true) }}
						 </div>
					 @else
					     {{ Form::label('image', 'Upload Image', array('class'=> 'col-sm-2 control-label'))}}
					     <div class="col-sm-5">
					     {{ Form::file('image') }}
					     </div>
                     @endif
				</div>
			  <div class="form-group">
				  <div class="col-sm-offset-2 col-sm-5">
					  <button type ="submit" class ="btn btn-danger">Save Changes</button>
				  </div>
		      </div>
	{{ Form::close() }}
    </div>
@stop