<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
  
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(8);
        return view('post.index', compact('posts'));
    }

    
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('post')->with('status', 'Post created successfully!');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect('post')->with('status', 'Post updated successfully!');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('post')->with('status', 'Post deleted successfully!');
    }
}
