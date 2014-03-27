@extends('layouts.master')

@section('content')

	<h1 class="blog-title">Technologic Blog</h1><span class="lead">Technology at your fingertips</span> 
       <p>
            <h4><a href="{{{action ('PostsController@create') }}}"> Create New Post</a></h4>
       </p>
       <hr>

 	@foreach ($posts as $post)
		<div class="blog-post">
            	<h3 class="blog-post-title"><a href = "{{{ action('PostsController@show', $post->id) }}}">{{{$post->title}}}</a></h3>
            	<p class="blog-post-meta">{{{$post->created_at}}}</p>

            	<p>{{{$post->body}}}</p>
            	<hr>
    	</div>
 	@endforeach

  {{ $posts->links() }}
    
@stop