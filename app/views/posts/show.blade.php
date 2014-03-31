@extends('layouts.master')
@section('content')

          
            	<h3 class="blog-post-title">{{{$post->title}}}</h3>
            	<p>{{{$post->body}}}</p>
                <br>{{{$post->created_at->format('l, F jS Y @ h:i A')}}}

            	<br><hr>
            	<p><h4><a href = "{{{ action ('PostsController@index') }}}">Return to posts listings</a> | 
            		   <a href = "{{{ action ('PostsController@edit', $post->id) }}}">Edit Post</a> &middot;
            		   <a href = "#" id = "btnDeletePost"> Delete Post</a></h4></p> 
                
                <!-- form for deleting a post -->
                {{ Form::open(array('action'=> array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'formDeletePost'))}}
                {{ Form::close() }}
@stop

@section('bottom-script')
	<script>
	$('#btnDeletePost').on('click', function(e){
	   e.preventDefault();

	   if (confirm('Are you sure you want to delete this post?')){
	   	  $('#formDeletePost').submit();
	   }

	});
	</script>
@stop