<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index',compact('posts'));
    }
    public function create() {
        return view('posts.create');
    }
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:200',
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('posts.index');
    }
    public function confirm(Request $request) {
        $validated = $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:200',
        ]);

        $title = $request->input('title');
        $content = $request->input('content');

        return view('posts.confirm', compact('title', 'content'));
    }
}
