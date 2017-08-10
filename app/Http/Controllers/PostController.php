<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
