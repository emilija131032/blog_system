<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TextPost extends Model
{
    protected $fillable = [
        'title',
        'body'
    ];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
