@extends('layouts.master')

@section('content')

          
            	<h3 class="blog-post-title">{{{$post->title}}}</h3>
                <p class="blog-post-meta">{{{$post->created_at}}}</p>
            	<p>{{{$post->body}}}</p>

            	<hr>
            	<p><h4><a href = "{{{action ('PostsController@index') }}}">Return to posts listings</a> &middot; <a href = "{{{action ('PostsController@edit', $post->id) }}}">Edit Post</a></h4></p> 

@stop