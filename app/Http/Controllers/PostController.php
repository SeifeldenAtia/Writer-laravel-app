<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::paginate(10);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = new Post($validatedData);
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        // Next post Id
        $nextPost = Post::where('id', '>', $post->id)->orderBy('id')->first();
        // Previous post Id
        $previousPost = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();

        // Get the latest 3 posts (excluding the current post)
        $latestPosts = Post::where('id', '!=', $post->id)
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();

        return view('posts.show' ,
        [
        'post' => $post,
        'nextPost' => $nextPost,
        'previousPost' => $previousPost,
        'latestPosts' => $latestPosts,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post Deleted Successfully');
    }
}
