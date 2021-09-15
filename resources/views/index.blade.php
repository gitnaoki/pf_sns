@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    
                    <a href='/posts/create'>新規作成</a>
         <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <p class='user_name'>{{$post->user_name}}</p>
                    <a class='title' href="/posts/{{ $post->id }}">{{$post->title}}</a>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
         </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection