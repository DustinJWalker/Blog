<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;


class CommentsController extends Controller
{
    //store method
    public function store(Post $post) {
        $this->validate(request(), ['body' => 'required|min:2']);
        $post->addComment(request('body'));

        return back();
    }

}
