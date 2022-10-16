        @extends('layouts.app')
        @section('content')
 
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">トップページ</a></li>
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
        
        <a href="/team/want">チーム募集一覧に戻る</a>
        <center><h1>{{ $team->team }}</h1></center>
        
 <div class='team'>

    <div class="box2">
        <h2>チーム名:</h2>
        <h3 class='team'>{{ $team->team }}</h3>  
        <h2>モチベーション：</h2>
        <h5 class="id">{{ $team->motivation }}</h5>
        <h2>募集人数:</h2>
        <h5 class='number_applicant'>{{ $team->number_applicant }}</h5>
        <h2>チーム説明:</h2>
        <h5 class='age'>{{ $team->comment }}</h5>
        
        
        <h2>ポジション:</h2>
        <h5 class='position'>
        @foreach($team->positions as $position)   
            {{ $position->name }}
        @endforeach
        </h5>
        <h2>募集武器:</h2>
        <h5 class='weapon'>
        @foreach($team->weapons as $weapon)   
            {{ $weapon->name }}
        @endforeach
        </h5> 
   </div>      
   
</div>
<form action="/storeteam" method="POST">
        @csrf
        @method('PUT')
        <input type='hidden' name='team' value={{ $team->team }}/>
        <center><input type="submit" value="このチームに参加する" /></center>
</form>


        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">トップページ</a></li>
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