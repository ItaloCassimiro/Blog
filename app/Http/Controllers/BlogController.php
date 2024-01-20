<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function create(Request $request) {
        return view('blogs.create');
    }

    public function create_action(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $post = new Blog;
        $post->user_id = Auth::id();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();

        return redirect()->route('blog.create')->with('success', 'Post criado com sucesso!');
    }

    public function index()
    {
        $userBlogs = auth()->user()->blogs;

        return view('blogs.index', compact('userBlogs'));
    }

}
