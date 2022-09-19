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
        
        
        <center><h1>対戦相手募集</h1></center>
        <center><a class="btn btn-primary" href="/opponent/want/post" role="button">投稿作成</a></center>
        
        <div class='opponent_wanteds'>

            @foreach($opponents as $opponent)
            <div class="box1">
                ルール:
                <h3 class='rule'>{{ $opponent->rule }}</h3>  
                本数:
                <h5 class="win_number">{{ $opponent->win_number }}</h5>
                ウデマエ:
                <h5 class='rank'>{{ $opponent->rank }}</h5>
                コメント:
                <h5 class='comment'>{{ $opponent->comment }}</h5>
                フレンドコード
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