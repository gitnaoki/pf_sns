
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <p class='title'>{{$post->title}}</p>
                    <p class='body'>{{ $post->body }}</p>
                    <a href='/'>一覧に戻る</a>
                    <a href="/posts/{{ $post->id }}/edit">編集</a>
        <form action="/posts/{{ $post->id }}" method="post">
            @csrf
            @method('DELETE')
        <input type="submit" value="投稿を削除" onclick="deleteConfirm()">
        </form>
        
        <form method="POST" action="/comments/{{$post->id}}">
            @csrf
            コメント<br>
            <textarea name="body"></textarea><br>
            <input type="submit">
        </form>
        
        @foreach ($comments as $comment)
                <div class='post'>
                    <p class='user_name'>{{$comment->user_name}}</p>
                    <p class='body'>{{ $comment->body }}</p>
                </div>
        @endforeach
        
        <script>
            function deleteConfirm(){
                confirm("本当に削除しますか？");
            }
        </script>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection