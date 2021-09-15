<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request,Comment $comment,Post $post){
       $user = Auth::user();
        $comment->user_name=$user->name;
        $comment->user_id=$user->id;
        $comment->post_id=$post->id;
        $comment->body=$request->body;
        $comment->save();
        
        //Postモデルのcomments()を利用してポストに所属するコメントを取得
        $comment =Post::find($post->id)->comments;
        return view('show')->with(['post'=>$post,'comments'=>$comment]);
    }
}

