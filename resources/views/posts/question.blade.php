<!DOCTYPE html>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nu2nito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
        
        @extends('layouts.app')
        @section('content')
        
        @if(isset( Auth::user()->name ))
        <p>{{ Auth::user()->name }}</p>
        @else
        <p>ゲスト</p>
        @endif
        
        <center><h1>Ink Fighters</h1></center>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">トップページ</a></li>
            <li class="breadcrumb-item"><a href="#">チーム募集</a></li>
            <li class="breadcrumb-item"><a href="#">対抗戦相手募集</a></li>
            <li class="breadcrumb-item"><a href="#">即席味方募集</a></li>
          </ol>  
          
    <form action="/posts" method="POST">
        @csrf
        <div style="padding: 10px; margin-bottom: 10px; width=50%;　display=flexbox; border: 1px solid #333333;">
        <p>持ち武器を選択してください</p>
                <div class="category">
                    <h2>武器選択</h2>
                    <select name="post[category_id]">
                    @foreach($weapons as $weapon)
                    <option value="{{ $weapon->id}}">{{ $weapon->name }}</option>
                    @endforeach
                    </select>
                </div>
        </div>

        <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;">
            <p>あなたのポジションを選択してください</p>
            <button type="button" style="margin:25px" class="btn btn-danger">前衛</button>
            <button type="button" style="margin:25px" class="btn btn-primary">中衛</button>
            <button type="button" style="margin:25px" class="btn btn-success">後衛</button>
        </div>
        
　　　  <div style="padding: 10px; margin-bottom: 10px; width=50%; border: 1px solid #333333;">

            <div class="title">
                <p>チーム名を入力してください。 ※所属している場合のみ</p>
                <input type="text" name="post[title]" placeholder="チーム名" value="{{old('post.title')}}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
        </div>
    </form>
        
        
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">トップページ</a></li>
            <li class="breadcrumb-item"><a href="#">チーム募集</a></li>
            <li class="breadcrumb-item"><a href="#">対抗戦相手募集</a></li>
            <li class="breadcrumb-item"><a href="#">即席味方募集</a></li>
          </ol>  
        </nav>
        
        @endsection
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>