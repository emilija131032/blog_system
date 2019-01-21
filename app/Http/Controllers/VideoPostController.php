<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoPost;

class VideoPostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function create()
    {
        $video_posts = VideoPost::all();
        return view('post', compact('text_posts'));
    }

    public function store(Request $request)
    {
        $post = new VideoPost();
        $post->title = $request->get('title');
        $post->url = $request->get('url');

        $post->save();

        return redirect('posts');

    }

    public function update(Request $request, $id)
    {
        $post = VideoPost::find($id);
        $post->title = $request->get('title');
        $post->url = $request->get('url');

        $post->save();

        return redirect('posts');

    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('show', compact('post'));
    }

    public function delete($id)
    {
        $post = TextPost::find($id);
        return $post->delete();
    }
}
