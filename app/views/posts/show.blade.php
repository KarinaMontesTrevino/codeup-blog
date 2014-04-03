@extends('layouts.master')
    <style>
         #postimage{
            width: 300px;
            height: 300px;
         }
     </style>
@section('content')

          
            	<h3 class="blog-post-title">{{{ $post->title }}}</h3>
                @if (!empty($post->image_path))
                <p><img id="postimage" src ="{{ $post->image_path }}" alt"img"></p>
                @endif
                <p>{{{ $post->body }}}</p>
                <!--Add a image in case we have one in the database for this post-->
                <br>{{{ $post->created_at->format('l, F jS Y @ h:i A') }}}
                <br>Writen by: {{{ $post->user->email }}}

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