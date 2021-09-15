<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Comment;

class PostController extends Controller
{
     public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->get()]);  
    }
    public function create(){
        return view('create');
    }
    public function show(Post $post,Comment $comment){
        
        //Postモデルのcomments()を利用してポストに所属するコメントを取得
        $comment =Post::find($post->id)->comments;
        return view('show')->with(['post'=>$post,'comments'=>$comment]);
    }
    public function store(Request $request,Post $post){
        $user = Auth::user();
        $post->user_name=$user->name;
        $post->user_id=$user->id;
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
