        @extends('layouts.app')
        @section('content')
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">トップページ</li>
            <li class="breadcrumb-item"><a href="/team/want">チーム投稿一覧</a></li>
            <li class="breadcrumb-item"><a href="/opponent/want">対抗戦相手募集</a></li>
            <li class="breadcrumb-item"><a href="#">即席味方募集</a></li>
            @if(isset( Auth::user()->id ))
            <li class="breadcrumb-item"><a href="/profile/{{ Auth::user()->id }}">プロフィール</a></li>
            @else
            <li class="breadcrumb-item">プロフィール</li>
            @endif
          </ol>  
        </nav>
        {{-- @if(isset( Auth::user()->name ))
        <p>{{ Auth::user()->name }}</p>
        @else
        <p>ゲスト</p>
        @endif
       <center><h1>Ink Fighters</h1></center>--}}
        
        
        <h2>サイトの説明</h2>
        <p>このサイトでは、チーム募集、相手募集ができます！</p>
        <h2>ルール</h2>
        <p>一人で複数の投稿はお控えください</p>
        @auth
        @if(Auth::user()->question == 0)
        <h2>プロフィール作成のお願い</h2>
        <p>あなたのことを知ってもらうために<a href="user/{{ Auth::id() }}/question">プロフィール質問</a>の回答お願いします！</p>
        @else
        <h2>プロフィール</h2>
        <p>あなたの<a href="/profile/{{ Auth::user()->id }}">プロフィール</a>はいつでも編集できます！</p>
        @endif
        @endauth
        <canvas class="background"></canvas>
        
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>トップページ</a></li>
            <li class="breadcrumb-item"><a href="/team/want">チーム投稿一覧</a></li>
            <li class="breadcrumb-item"><a href="/opponent/want">対抗戦相手募集</a></li>
            <li class="breadcrumb-item"><a href="#">即席味方募集</a></li>
            @if(isset( Auth::user()->id ))
            <li class="breadcrumb-item"><a href="/profile/{{ Auth::user()->id }}">プロフィール</a></li>
            @else
            <li class="breadcrumb-item">プロフィール</li>
            @endif
          </ol>  
        </nav>
    

        @endsection