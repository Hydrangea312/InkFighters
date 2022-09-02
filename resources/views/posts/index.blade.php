<!DOCTYPE html>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        
        <p>----後で消す----</p>
        <a href="/question">question</a>/
        <a href="/weapon/create">weapon</a>
        <p>-----------------</p>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>トップページ</a></li>
            <li class="breadcrumb-item"><a href="#">チーム募集</a></li>
            <li class="breadcrumb-item"><a href="#">対抗戦相手募集</a></li>
            <li class="breadcrumb-item"><a href="#">即席味方募集</a></li>
          </ol>  
        </nav>
        <h2>サイトの説明</h2>
        <p>aaa</p>
        <h2>ルール</h2>
        <p>bbb</p>
        <h2>プロフィール作成のお願い</h2>
        <p>ccc</p>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>トップページ</a></li>
            <li class="breadcrumb-item"><a href="#">チーム募集</a></li>
            <li class="breadcrumb-item"><a href="#">対抗戦相手募集</a></li>
            <li class="breadcrumb-item"><a href="#">即席味方募集</a></li>
          </ol>  
        </nav>
        @endsection
    </body>
</html>