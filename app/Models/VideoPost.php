<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoPost extends Model
{
    protected $fillable = [
        'title',
        'url'
    ];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
