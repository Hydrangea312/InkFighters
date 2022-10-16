@extends('layouts.app')
@section('content')

    <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">トップページ</a></li>
            <li class="breadcrumb-item"><a href="/team/want">チーム投稿一覧</a></li>
            <li class="breadcrumb-item"><a>対抗戦相手募集</a></li>
            <li class="breadcrumb-item"><a href="#">即席味方募集</a></li>
            @if(isset( Auth::user()->id ))
            <li class="breadcrumb-item"><a href="/profile/{{ Auth::user()->id }}">プロフィール</a></li>
            @else
            <li class="breadcrumb-item">プロフィール</li>
            @endif
          </ol>  
        </nav>
    
    <center><h1>対戦相手募集</h1></center>
    
<form action="/opponent" method="POST">
 @csrf
<center><input type="submit" value="投稿" />
    <div class="win_number">
    <h2>本数 ※数字で入力してください</h2>
    <p><input type="text" name="opponent[win_number]" placeholder="本数" value="{{ old('opponent.win_number') }}"/></p>
    <p class="title__error" style="color:red">{{ $errors->first('opponent.win_number') }}</p>
    </div>

    <div class="rank">
    <h2>ウデマエ</h2>
    <p><input type="text" name="opponent[rank]" placeholder="ウデマエ" value="{{ old('opponent.rank') }}"/></p>
    <p class="title__error" style="color:red">{{ $errors->first('opponent.rank') }}</p>
    </div>
    
    <div class="comment">
        <h2>コメント</h2>
        <p><textarea  type="text" name="opponent[comment]" placeholder="5人制など" value="{{ old('opponent.comment') }}"></textarea></p>
        <p class="title__error" style="color:red">{{ $errors->first('opponent.comment') }}</p>
    </div>
    
    <div class="friendcode">
        <h2>フレンドコード ※数字で入力してください</h2>
        <p><input type="text" name="opponent[friendcode]" placeholder="フレンドコード" value="{{ old('opponent.friendcode') }}"/></p>
        <p class="title__error" style="color:red">{{ $errors->first('opponent.friendcode') }}</p>
    </div>
    
    <div class="rule">
    <h2>ルール</h2>
    <p><select name="opponent[rule]">
      @foreach($rules as $rule)
      <option value="{{ $rule->name }}">{{ $rule->name }}</option>
      @endforeach
    </select> </p>     
    </div>
    </form></center>

    <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">トップページ</a></li>
            <li class="breadcrumb-item"><a href="/team/want">チーム投稿一覧</a></li>
            <li class="breadcrumb-item"><a>対抗戦相手募集</a></li>
            <li class="breadcrumb-item"><a href="#">即席味方募集</a></li>
            @if(isset( Auth::user()->id ))
            <li class="breadcrumb-item"><a href="/profile/{{ Auth::user()->id }}">プロフィール</a></li>
            @else
            <li class="breadcrumb-item">プロフィール</li>
            @endif
          </ol>  
        </nav>
@endsection