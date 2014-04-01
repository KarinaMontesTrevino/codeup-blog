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
   
    <div class= "pull-right">
    {{ Form::open(array('action'=> array('PostsController@index'), 'method'=>'get')) }}    
	    {{ Form::label('search', 'Search Posts') }}
	    {{ Form:: text('search')}}
	    {{ Form::submit('Search')}}
    {{ Form::close() }}
   </div>

	<h1 class="blog-title">Technologic Blog</h1><span class="lead">Technology at your fingertips</span> 
			 <p>
						<h5><a href="{{{action ('PostsController@create') }}}"> Create New Post</a></h5>
			 </p>
			 <hr>


	@foreach ($posts as $post)
		<div class="blog-post">

			<div class ="inline">
				<h3 class="blog-post-title"><a href = "{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a>
				<a type= "button" class = "btn btn-primary-sm" href = "{{{ action('PostsController@edit', $post->id) }}}">&middot; Edit</a></h3>
			</div>

			<p>{{{ Str::words($post->body, 100) }}}</p>
			<br>{{$post->created_at->format('l, F jS Y @ h:i A')}}
			<br>Written by: {{$post->user->email }}
            <br><hr>
		</div>
	@endforeach

	{{ $posts->appends(array('search' => Input::get('search')))->links() }}
@stop