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

        return response()->json($video_posts, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $post = new VideoPost();

        $post->title = $request->get('title');
        $post->url = $request->get('url');

        $post->save();

        return response([
            'status' => 'success',
            'data' => $post,
        ], 200);

    }

    public function update(Request $request, $id)
    {
        $post = VideoPost::find($id);
        $post->title = $request->get('title');
        $post->url = $request->get('url');

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
