<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>sns</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <form method="POST" action="/posts/{{$post->id}}">
            @csrf
            @method('PUT')
            タイトル<br>
            <input name="title" value="{{$post->title}}"><br>
            コメント<br>
            <textarea name="body" >{{$post->body}}</textarea><br>
            <input type="submit" value="変更を保存">
        </form>
        
    </body>
</html>
