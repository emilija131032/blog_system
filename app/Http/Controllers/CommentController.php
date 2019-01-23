<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\TextPost;
use App\Models\VideoPost;
use App\User;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $video_post = VideoPost::find($request->get('post_id'));
        $text_post = TextPost::find($request->get('post_id'));
        $video_post->comments()->save($comment);
        $text_post->comments()->save($comment);

        return back();
    }



    public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->body = $request->get('comment_body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $video_post = VideoPost::find($request->get('post_id'));
        $text_post = TextPost::find($request->get('post_id'));

        $video_post->comments()->save($reply);
        $text_post->comments()->save($reply);

        return back();
    }

}
