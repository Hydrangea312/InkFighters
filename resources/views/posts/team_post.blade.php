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
        @if(isset( $users->id ))
        <li class="breadcrumb-item"><a href="/profile/{{ $users->id }}">プロフィール</a></li>
        @else
        <li class="breadcrumb-item">プロフィール</li>
        @endif
      </ol>  
    </nav>
    
    <center><h1>チーム募集</h1></center>
    
<form action="/team" method="POST">
 @csrf
<center><input type="submit" value="投稿" />
    <div class="team">
    <h2>チーム名</h2>
    <input type="text" name="team[team]" placeholder="チーム名" value="{{ old('team.team') }}"/>
    <p class="title__error" style="color:red">{{ $errors->first('team.team') }}</p>
    </div>

    <div class="motivation">
    <h2>モチベーション ※数字で入力してください</h2>
    <input type="text" name="team[motivation]" placeholder="モチベーション" value="{{ old('team.motivation') }}"/>
    <p class="title__error" style="color:red">{{ $errors->first('team.motivation') }}</p>
    </div>

    <div class="number_applicant">
    <h2>募集人数 ※数字で入力してください</h2>
    <input type="text" name="team[number_applicant]" placeholder="募集人数" value="{{ old('team.number_applicant') }}" />
    <p class="title__error" style="color:red">{{ $errors->first('team.number_applicant') }}</p>
    </div>

    <div　class="position">
    
    <div class="comment">
        <h2>チーム説明</h2>
        <textarea  type="text" name="team[comment]" placeholder="意気込みなど" value="{{ old('team.comment') }}"></textarea>
        <p class="title__error" style="color:red">{{ $errors->first('team.comment') }}</p>
    </div>
    
    <div class="friendcode">
            <h2>フレンドコード ※数字で入力してください</h2>
            <input type="text" name="team[friendcode]" placeholder="フレンドコード" value="{{ old('team.friendcode') }}"/>
            <p class="title__error" style="color:red">{{ $errors->first('team.friendcode') }}</p>
    </div>
    <div class="weapon">
        <h2>欲しい武器を選んでください</h2>
        @foreach($weapons as $weapon)
        <label>
            <input type="checkbox" value="{{ $weapon->id }}" name="weapons_array[]">
                {{ $weapon->name }}
            </input>
        </label>
    @endforeach 
   </div> 
    <h2>欲しいポジション</h2>
    @foreach($positions as $position)
    <input type="checkbox" value="{{ $position->id }}" name="positions_array[]">
    {{ $position->name }}
    </input>
    @endforeach        
    </div>
    </form></center>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">トップページ</a></li>
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