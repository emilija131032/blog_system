<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TextPost;
class TextPostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function create()
    {
        $text_posts = TextPost::all();
        return view('post', compact('text_posts'));
    }

    public function store(Request $request)
    {
        $post = new TextPost();
        $post->title = $request->get('title');
        $post->body = $request->get('body');

        $post->save();

        return redirect('posts');

    }

    public function update(Request $request, $id)
    {
        $post = TextPost::find($id);
        $post->title = $request->get('title');
        $post->body = $request->get('body');

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
