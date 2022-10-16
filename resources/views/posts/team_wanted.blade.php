        @extends('layouts.app')
        @section('content')

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">トップページ</a></li>
            <li class="breadcrumb-item"><a>チーム投稿一覧</a></li>
            <li class="breadcrumb-item"><a href="/opponent/want">対抗戦相手募集</a></li>
            <li class="breadcrumb-item"><a href="#">即席味方募集</a></li>
            @if(isset( Auth::user()->id ))
            <li class="breadcrumb-item"><a href="/profile/{{ Auth::user()->id }}">プロフィール</a></li>
            @else
            <li class="breadcrumb-item">プロフィール</li>
            @endif
          </ol>  
        </nav>
        
        
        <center><h1>チーム募集</h1></center>
        <center><a class="btn btn-primary" href="/team/want/post" role="button">投稿作成</a></center>
        
        <div class='team'>

    {{-- チームの数だけ繰り返す --}}
    @foreach($teams as $team)
    <div class="box2">
        <p>チーム名:</p>
        <h3 class='team'><a href="/team/profile/{{ $team->id }}">{{ $team->team }}</a></h3>  
        <p>モチベーション:</p>
        <star-rating :rating="{{ $team->motivation }}" :read-only="true" :max-rating="10" :show-rating="false"></star-rating>
        <h5 class="id">{{ $team->motivation }}</h5>
        <p>募集人数:</p>
        <h5 class='number_applicant'>{{ $team->number_applicant }}</h5>
        <p>チーム説明:</p>
        <h5 class='age'>{{ $team->comment }}</h5>
        
        
        <p>募集ポジション:</p>
        <h5 class='position'>
        @foreach($team->positions as $position)   
            {{ $position->name }}
        @endforeach
        </h5>
        <p>募集武器:</p>
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
            <li class="breadcrumb-item"><a>チーム投稿一覧</a></li>
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