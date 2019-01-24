<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TextPost;
class TextPostController extends Controller
{
    public function create()
    {

    }

        public function store(Request $request)
    {

        $post = TextPost::create($request->all());

        $post->save();

        return redirect('/home');
    }


    public function update(Request $request, $id)
    {
        $post = TextPost::find($id);
        $post->title = $request->get('title');
        $post->body = $request->get('body');

        $post->save();

        return response([
            'status' => 'success',
            'data' => $post,
        ], 200);

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
