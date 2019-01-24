<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\TextPost;
use App\Models\VideoPost;

class CommentController extends Controller
{
    /**
     * @param  int $post_id
     * @param  \Illuminate\Http\Request $request
     */

    public function store($post_id, Request $request)
    {
        $post = TextPost::find($post_id);
        $body = $request->get('body');
        $user = $request->get('user_id');

        $post->addComment($body, $user);
    }

    public function storeVideoComment($video_id, Request $request)
    {
        $post = VideoPost::find($video_id);
        $body = $request->get('body');
        $user = $request->get('user_id');

        $post->addComment($body, $user);
    }


}
