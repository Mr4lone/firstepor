<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::paginate(3);
        //$posts = Post::all();
        return view('blog.welcome', compact('posts'));
    }
  
    public function create()
    {
        return view('blog.create');
    }
   
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'shortnote' =>'required',
            'description' => 'required',
        ]);
        Post::create($request->all());
      //  return view('blog.welcome');//->with('success','Created successfully');
     return redirect()->route('posts.index')->with('success','Post created successfully.');
     // return redirect()->route('posts.welcome', ['id' => 1]);
    }
  
    public function show(Post $post)
    {
        return view('blog.show',compact('post'));
    }

    public function edit(Post $post)
    {
        return view('blog.edit',compact('post'));
    }
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $post->update($request->all());
        return redirect()->route('posts.index')->with('success','Post updated successfully');
  
    }
     public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
                        ->with('success','post deleted successfully');
    }
}
