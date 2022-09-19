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
            <input name="user" type="button" style="margin:25px" onclick="addAnswer('moji1')" id="front" class="btn btn-danger"  value="前衛"/>
            <button type="button" style="margin:25px" onclick="addAnswer('moji2')" id="middle" class="btn btn-primary" value="中衛">中衛</button>
            <button type="button" style="margin:25px" onclick="addAnswer('moji3')" id="rear" class="btn btn-success">後衛</button>
            <p>選択されたポジション　下のボタンをクリックしたら解除できます</p>
            <div type="button" ID="moji1" style="visibility:hidden;"　class="btn btn-danger"　onclick="removeAnswer('moji1')">
            前衛
            </div>
            <div type="button" ID="moji2" style="visibility:hidden;"　class="btn btn-primary"　onclick="removeAnswer('moji2')">
            中衛
            </div>
            <div type="button" ID="moji3" style="visibility:hidden;"　class="btn btn-success"　onclick="removeAnswer('moji3')">
            後衛
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
        function addAnswer(element) 
        {
            var e = document.all.item(element);
            e.style.visibility='visible';
            e.setAttribute('name', 'user');

        }
        
        function removeAnswer(element) 
        {
            var e = document.all.item(element);
            e.style.visibility='hidden';
            e.removeAttribute('name');
        }
        </script>
        
        
        @endsection