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
                    <p class='title'>{{$post->title}}</p>
                    <p class='body'>{{ $post->body }}</p>
                    <a href='/'>一覧に戻る</a>
                    <a href="/posts/{{ $post->id }}/edit">編集</a>
        <form action="/posts/{{ $post->id }}" method="post">
            @csrf
            @method('DELETE')
        <input type="submit" value="投稿を削除" onclick="deleteConfirm()">
        </form>
        <script>
            function deleteConfirm(){
                confirm("本当に削除しますか？");
            }
        </script>
    </body>
</html>
