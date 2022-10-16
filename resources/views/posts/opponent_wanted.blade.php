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
        
        
        <center><h1>対戦相手募集</h1></center>
        <center><a class="btn btn-primary" href="/opponent/want/post" role="button">投稿作成</a></center>
        
        <div class='opponent_wanteds'>

            @foreach($opponents as $opponent)
            <div class="box2">
                <p>ルール:</p>
                <h3 class='rule'>{{ $opponent->rule }}</h3>  
                <p>本数:</p>
                <h5 class="win_number">{{ $opponent->win_number }}</h5>
                <p>ウデマエ:</p>
                <h5 class='rank'>{{ $opponent->rank }}</h5>
                <p>コメント:</p>
                <h5 class='comment'>{{ $opponent->comment }}</h5>
                <p>フレンドコード:</p>
                <h5 class='friendcode'>{{ $opponent->friendcode }}</h5>
        
           </div>      
            @endforeach
            <div class='paginate'>
                    {{ $opponents->links() }}
            </div>
       </div>


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