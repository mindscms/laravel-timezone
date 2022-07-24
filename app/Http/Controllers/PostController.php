<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use JamesMills\LaravelTimezone\Facades\Timezone;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        Post::create([
            'title' => $request->title,
            'user_id' => auth()->id(),
            'published_at' => Timezone::convertFromLocal($request->published_at),
        ]);

        return redirect()->route('posts.index');
    }
}
