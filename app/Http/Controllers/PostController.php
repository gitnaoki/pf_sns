<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
     public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->get()]);  
    }
    public function create(){
        return view('create');
    }
    public function show(Post $post){
        return view('show')->with(['post' => $post]);
    }
    public function store(Request $request,Post $post){
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return redirect('/');
    }
    public function edit(Post $post){
        return view('edit')->with(['post' => $post]);
    }
    public function update(Request $request,Post $post){
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return redirect('/');
    }
    public function delete(Post $post){
    $post->delete();
    return redirect('/');
    }
    
}
