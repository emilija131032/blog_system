<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\CommentableTrait;

/**
 * Class VideoPost
 * App\Models\VideoPost
 *
 * @property int $id
 * @property string $title
 * @property string $url
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 */
class VideoPost extends Model
{
    protected $fillable = [
        'title',
        'url'
    ];

    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}
