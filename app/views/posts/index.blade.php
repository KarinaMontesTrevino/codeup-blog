@extends('layouts.master')
<style>
  .inline{
  	display: inline-block;
  }

  .btn.btn-primary-sm{
  	padding: 0px;
  }
  
</style>
@section('content')

	<h1 class="blog-title">Technologic Blog</h1><span class="lead">Technology at your fingertips</span> 
			 <p>
						<h4><a href="{{{action ('PostsController@create') }}}"> Create New Post</a></h4>
			 </p>
			 <hr>

	@foreach ($posts as $post)
		<div class="blog-post">

					<div class ="inline">
						<h3 class="blog-post-title"><a href = "{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a>
						<a type= "button" class = "btn btn-primary-sm" href = "{{{ action('PostsController@edit', $post->id) }}}">&middot; Edit</a></h3>
					</div>

					<p>{{{ Str::words($post->body, 100) }}}</p>
					<p class= "pull-right">{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A')}}</p>

					<br><hr>
			</div>
	@endforeach

	{{ $posts->links() }}
		
@stop