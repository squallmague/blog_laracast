<?php

namespace App;


class Post extends Model
{
    
	public function comments()

	{

		return $this->hasMany(Comment::class);

	}

	public function user() // $comment->post->name

	{

		return $this->belongsTo(User::class);
		
	}

	public function addComment($body)

	{

		$this->comments()->create(compact('body'));
		
	}

}
