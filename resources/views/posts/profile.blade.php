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


        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">トップページ</a></li>
            <li class="breadcrumb-item"><a href="/team/want">チーム投稿一覧</a></li>
            <li class="breadcrumb-item"><a href="/opponent/want">対抗戦相手募集</a></li>
            <li class="breadcrumb-item"><a href="#">即席味方募集</a></li>
            <li class="breadcrumb-item"><a>プロフィール</a></li>

          </ol>  
        </nav>
        
         @if(isset( Auth::user()->name ))
          <h2>ID</h2>
          <p>{{ Auth::user()->email }}</p>
          <h2>ニックネーム</h2>
          <p>{{ Auth::user()->name }}</p>
          <h2>使用武器</h2>
          <p>
          @foreach(Auth::user()->weapons as $weapon)   
            {{ $weapon->name }}
          @endforeach
          </p>
          <h2>ポジション</h2>
          <p>
          @foreach(Auth::user()->positions as $position)   
            {{ $position->name }}
          @endforeach
          </p>
          <h2>チーム名</h2>
          @if(isset( Auth::user()->team))
            <p>{{ Auth::user()->team }}</p>
            @else
            <p>チームに参加していません</p>
          @endif
        @endif
        <p><a href="/">トップページへ移行する</a></p>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">トップページ</a></li>
            <li class="breadcrumb-item"><a href="/team/want">チーム投稿一覧</a></li>
            <li class="breadcrumb-item"><a href="/opponent/want">対抗戦相手募集</a></li>
            <li class="breadcrumb-item"><a href="#">即席味方募集</a></li>
            <li class="breadcrumb-item"><a>プロフィール</a></li>
          </ol>  
        </nav>
        @endsection
    </body>
</html>