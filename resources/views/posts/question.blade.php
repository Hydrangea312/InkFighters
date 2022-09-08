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
            <li class="breadcrumb-item">トップページ</li>
            <li class="breadcrumb-item">チーム募集</li>
            <li class="breadcrumb-item">対抗戦相手募集</li>
            <li class="breadcrumb-item">即席味方募集</li>
            <li class="breadcrumb-item">プロフィール</li>
          </ol>  
          
    <form action="/user" method="POST">
        @csrf
        <div style="padding: 10px; margin-bottom: 10px; width=50%;　display=flexbox; border: 1px solid #333333;">
        <p>持ち武器を選択してください</p>
                <div class="weapon">
                    <h2>武器選択</h2>
                    <select name="weapon[]">
                    @foreach($weapons as $weapon)

                    <option value="{{ $weapon->id }}">{{ $weapon->name }}</option>

                    @endforeach
                    </select>
                </div>
        </div>

        <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;">
            <p>あなたのポジションを選択してください</p>
            <button type="button" style="margin:25px" onclick="document.all.item('moji1').style.visibility='visible',addAnswer1();" id="front" class="btn btn-danger" value="前衛">前衛</button>
            <button type="button" style="margin:25px" onclick="document.all.item('moji2').style.visibility='visible',addAnswer2();" id="middle" class="btn btn-primary" value="中衛">中衛</button>
            <button type="button" style="margin:25px" onclick="document.all.item('moji3').style.visibility='visible'" id="rear" class="btn btn-success">後衛</button>
            <p>選択されたポジション　下のボタンをクリックしたら解除できます</p>
            <div type="button" ID="moji1" style="visibility:hidden;"　class="btn btn-danger"　onclick="this.style.visibility='hidden'">
            前衛
            </div>
            <div type="button" ID="moji2" style="visibility:hidden;"　class="btn btn-primary"　onclick="this.style.visibility='hidden'">
            中衛
            </div>
            <div type="button" ID="moji3" style="visibility:hidden;"　class="btn btn-success"　onclick="this.style.visibility='hidden'">
            後衛
            </div>
        </div>

        
　　　  <div style="padding: 10px; margin-bottom: 10px; width=50%; border: 1px solid #333333;">
            <div class="title">
                <p>チーム名を入力してください。 ※所属している場合のみ</p>
                <input type="text" name="post[title]" placeholder="チーム名" value="{{old('post.title')}}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
        </div>
        <input type="submit" value="保存"/>
    </form>
        
        
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">トップページ</li>
            <li class="breadcrumb-item">チーム募集</li>
            <li class="breadcrumb-item">対抗戦相手募集</li>
            <li class="breadcrumb-item">即席味方募集</li>
            <li class="breadcrumb-item">プロフィール</li>
          </ol>  
        </nav>
        
        <script>
        function addAnswer1() 
        {
            front = document.getElementById("front")
            answerText = front.value
            answer.innerText = "  " + answerText + "  "
        }
        
        function addAnswer2() 
        {
            middle = document.getElementById("middle")
            answerText = middle.value
            answer.innerText = "  " + answerText + "  "
        }
        </script>
        
        
        @endsection