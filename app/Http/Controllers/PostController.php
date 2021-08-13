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
    public function store(Request $request,Post $post){
        $post->body=$request->body;
        $post->save();
        return redirect('/');
    }
}
