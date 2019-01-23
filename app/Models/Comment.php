<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model
{
    protected $fillable = [
        'body',
        'commentable_id',
        'commentable_type'
    ];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function text_post()
    {
        return $this->belongsTo('App\Models\TextPost');
    }


    public function video_post()
    {
        return $this->belongsTo('App\Models\VideoPost');
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
