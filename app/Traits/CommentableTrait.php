<?php

namespace App\Traits;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

trait CommentableTrait
{
    /**
     * Return all comments.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany('\App\Models\Comment', 'commentable');
    }

    /**
     * Add comment a new comment.
     *
     * @param  string $body
     * @return bool
     */
    public function addComment($body, $user)
    {
        $comment = new Comment();

        $comment->user_id = $user;
        $comment->body = $body;

        return $this->comments()->save($comment);
    }
}
