<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //setting up view
    public function index() 
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
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
          //create a new post using the request data
        Post::create(request(['title', 'body']));
        //redirect to main page
        return redirect('/');
    }



}
