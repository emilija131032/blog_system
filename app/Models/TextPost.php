<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\CommentableTrait;
/**
 * Class TextPost
 * App\Models\TextPost
 *
 * @property int $id
 * @property string $title
 * @property text $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 */
class TextPost extends Model
{
    use CommentableTrait;

    protected $fillable = [
        'title', 'body', 'created_at'
    ];

    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}
