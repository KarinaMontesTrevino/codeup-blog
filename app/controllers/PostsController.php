<?php

class PostsController extends \BaseController {

	public function __construct()
	{
	    // Call base controller constructor
	    parent::__construct();

	    //Run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array('except' => array('index', 'show')));

	    //Run post protect filter to make sure users can only manage their own posts
	    //$this->beforeFilter('post.protect', array('only' => array('edit', 'update', 'destroy' )));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Show a list of all posts

		$search = Input::get('search');
		$query = Post::with('user')->orderBy('created_at', 'desc');

		if (is_null($search)){
			$posts = $query->paginate(4);

		} else{

			$posts = $query->where('title', 'LIKE', "%{$search}%")
			               ->orWhere('body', 'LIKE', "%{$search}%")
			               ->paginate(4);
		}

        return View::make('posts.index')->with(array('posts'=> $posts));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return View::make('posts.create');	
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {    
	    	 Session::flash('errorMessage', 'Post could not be created - see form errors.');
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {
	        // validation succeeded, create and save the post
	        $post = new Post();
	        $post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
           
			if (Input::hasFile('image')) {

				$post->assignImage('image_path');
			}
            
			$post->save();
            Session::flash('successMessage', 'Post created sucessfully.');
            return Redirect::action('PostsController@index');
	    }

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with(array('post'=> $post));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with(array('post'=> $post));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {
	    	Session::flash('errorMessage', 'Post could not be updatedd - see form errors.');
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {
	        // validation succeeded, create and save the post
	        $post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->body = Input::get('body');

			// Upload an image
			if (Input::hasFile('image') && (!empty($post->image_path))){

				File::delete(public_path() . $post->image_path);
				$post->assignImage('image_path');



			} elseif (!empty($post->image_path) && (Input::get('delete') == 'delete')) {

				File::delete(public_path() . $post->image_path);
				$post->image_path = null;


			} elseif (Input::hasFile('image') && (empty($post->image_path)) && (Input::get('delete') != 'delete')) {

				$post->assignImage('image_path');
			}
            
			$post->save();
            Session::flash('successMessage', 'Post updated sucessfully.');
			return Redirect::action('PostsController@index');
	    }

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		Post::findOrFail($id)->delete();
		Session::flash('successMessage', 'Post deleted sucessfully.');
		return Redirect::action('PostsController@index');
	}

}