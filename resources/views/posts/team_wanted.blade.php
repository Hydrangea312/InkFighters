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
        <center><a class="btn btn-primary" href="/team/want/post" role="button">投稿作成</a></center>
        
        <div class='teams'>

    {{-- チームの数だけ繰り返す --}}
    @foreach($teams as $team)
    <div class="box1">
        チーム名:
        <h3 class='team'>{{ $team->team }}</h3>  
        モチベーション:
        <h5 class="id">{{ $team->motivation }}</h5>
        募集人数:
        <h5 class='number_applicant'>{{ $team->number_applicant }}</h5>
        チーム説明:
        <h5 class='age'>{{ $team->comment }}</h5>
        
        
        募集ポジション:
        <h5 class='position'>
        @foreach($team->positions as $position)   
            {{ $position->name }}
        @endforeach
        </h5>
        募集武器
        <h5 class='weapon'>
        @foreach($team->weapons as $weapon)   
            {{ $weapon->name }}
        @endforeach
        </h5>
   </div>      
    @endforeach
    <div class='paginate'>
            {{ $teams->links() }}
    </div>
    

        
        
         
         
         </div>


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