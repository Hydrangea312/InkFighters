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
        <a href="/weapon/create">weapon</a>/
        <a href="/team/want">チーム募集</a>/
        <a href="/team/want">チーム投稿一覧</a>/
        <a href="/opponent/want/post">対戦相手募集</a>
        <p>-----------------</p>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>トップページ</a></li>
            <li class="breadcrumb-item"><a href="#">チーム募集</a></li>
            <li class="breadcrumb-item"><a href="#">対抗戦相手募集</a></li>
            <li class="breadcrumb-item"><a href="#">即席味方募集</a></li>
            @if(isset( $users->id ))
            <li class="breadcrumb-item"><a href="/profile/{{ $users->id }}">プロフィール</a></li>
            @else
            <li class="breadcrumb-item">プロフィール</li>
            @endif
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
            @if(isset( $users->id ))
            <li class="breadcrumb-item"><a href="/profile/{{ $users->id }}">プロフィール</a></li>
            @else
            <li class="breadcrumb-item">プロフィール</li>
            @endif
          </ol>  
        </nav>
        @endsection