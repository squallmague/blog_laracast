<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Auth;

use App\Post;

use App\Comment;

class CommentsController extends Controller
{

    public function store(Post $post)

    {

        //$id=request()->user()->id;

        //$id = Auth::id();

    	$this->validate(request(), ['body' => 'required|min:2']);

    	$post->addComment(request('body'),request()->user()->id);

    	return back();

    }
}
