<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['title' => 'required|string|max:255', 'content' => 'nullable|string']);
        $request->user()->posts()->create($validated);
        return redirect('/posts')->with('success', 'Post created!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate(['title' => 'required|string|max:255', 'content' => 'nullable|string']);
        $post->update($validated);
        return redirect('/posts')->with('success', 'Post updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts')->with('success', 'Post deleted!');
    }
}
