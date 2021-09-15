@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  
        <form method="POST" action="/posts">
            @csrf
        
            タイトル<br>
            <input name="title"><br>
            コメント<br>
            <textarea name="body"></textarea><br>
            <input type="submit">
        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection