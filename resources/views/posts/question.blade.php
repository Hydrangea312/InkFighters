        @extends('layouts.app')
        @section('content')
        
        @if(isset( Auth::user()->name ))
        <p>{{ Auth::user()->name }}</p>
        @else
        <p>ゲスト</p>
        @endif
        
        <center><h1>Ink Fighters</h1></center>

       {{-- <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">トップページ</li>
            <li class="breadcrumb-item">チーム募集</li>
            <li class="breadcrumb-item">対抗戦相手募集</li>
            <li class="breadcrumb-item">即席味方募集</li>
            <li class="breadcrumb-item">プロフィール</li>
          </ol>  --}}
          
    <form action="/user/{{ Auth::id() }}" method="POST">
        @csrf
        @method('PUT')
        <input type="submit" value="保存"/>
        <div class=box2>
            <p>あなたのポジションを選択してください</p>
            <input type="button" style="margin:25px" onclick="addAnswer('moji1')" id="front" class="btn btn-danger"  value="前衛" />
            <input type="button" style="margin:25px" onclick="addAnswer('moji2')" id="middle" class="btn btn-primary" value="中衛"/>
            <input type="button" style="margin:25px" onclick="addAnswer('moji3')" id="rear" class="btn btn-success" value="後衛"/>
            <input type="button" style="margin:25px" onclick="addAnswer('moji4')" id="paint" class="btn btn-light" value="塗り特化"/>
            <input type="button" style="margin:25px" onclick="addAnswer('moji5')" id="killer" class="btn btn-dark" value="キル特化"/>
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
            <div type="button" ID="moji4" style="visibility:hidden;"　class="btn btn-light"　onclick="removeAnswer('moji4')">
            塗り特化
            </div>
            <div type="button" ID="moji5" style="visibility:hidden;"　class="btn btn-dark"　onclick="removeAnswer('moji5')">
            キル特化
            </div>
            
            <div id="position"></div>
            
        </div>
        
        <div class=friendcode>
            <div class=box2>
            <p>フレンドコードを入力してください</p>
            <input type="text" name="user[friendcode]" placeholder="フレンドコード" value="{{ old('user.friendcode') }}" />
            </div>
        </div>
        
        <div class="weapon">
            <div class=box2>
              <p>持ち武器を選択してください</p>
              <p>武器選択</p>
                    @foreach($weapons as $weapon)
                        <input type="checkbox" value="{{ $weapon->id }}" name="weapons_array[]">
                            {{ $weapon->name }}
                        </input>
                   @endforeach 
                </div>
            </div>
        </div>
    </form>
        
        
       {{-- <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">トップページ</li>
            <li class="breadcrumb-item">チーム募集</li>
            <li class="breadcrumb-item">対抗戦相手募集</li>
            <li class="breadcrumb-item">即席味方募集</li>
            <li class="breadcrumb-item">プロフィール</li>
          </ol>  
        </nav>--}}
        
        <script>
        function addAnswer(element) 
        {
            var e = document.all.item(element);
            e.style.visibility='visible';
            const node = document.createElement('input');
            const div = document.getElementById("position");
            if(!(!!document.getElementById(element+'L'))){
            node.setAttribute('type','hidden');
            node.setAttribute('name','positions_array[]');
            node.setAttribute('id',element+'L');
            node.setAttribute('value',Number(element.slice(-1)));
            div.appendChild(node);
            }
        }
        
        function removeAnswer(element) 
        {
            var e = document.all.item(element);
            e.style.visibility='hidden';
            document.getElementById(element+'L').remove();
        }
        </script>
        
        
        @endsection