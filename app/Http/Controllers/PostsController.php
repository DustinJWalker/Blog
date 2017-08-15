<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }
    //setting up view
    public function index() 
    {
        $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();

        $archives = Post::archives();

        
        return view('posts.index', compact('posts',));
    }

        public function show(Post $post) 
    {
        return view('posts.show', compact('post'));
    }

        public function create() 
    {
        return view('posts/create');
    }
            public function store() 
    {
        $this->validate(request(),  [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );
          //create a new post using the request data
        //redirect to main page
        return redirect('/');
    }



}
