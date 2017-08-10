<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //setting up view
    public function index() 
    {
        return view('posts.index');
    }

        public function show() 
    {
        return view('posts/show');
    }

        public function create() 
    {
        return view('posts/create');
    }
            public function store() 
    {
        //create a new post using the request data
      
        Post::create(request(['title', 'body']));
        //redirect to main page
        return redirect('/');
    }



}
