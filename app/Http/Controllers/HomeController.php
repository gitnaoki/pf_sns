<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user, Post $post)
    {
        // 現在ログインしているユーザー情報の取得
        $user = Auth::user();
        //Userモデルのposts()を利用してログインしているユーザーのポストを取得
        $post =User::find($user->id)->posts;
        return view('home')->with(['user'=>$user,'posts'=>$post]);
    }
}
