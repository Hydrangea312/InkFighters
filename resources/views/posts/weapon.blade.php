<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
        <h1>武器名登録専用</h1>
        <form action="/weapon" method="POST">
            @csrf
            <div class="ID">
                <h2>ID</h2>
                <input type="text" name="weapon[id]" placeholder="ID"/>
            </div>
            <div class="name">
                <h2>武器名</h2>
                <input type="text" name="weapon[name]" placeholder="武器名"/>
            </div>
            </div>
            <input type="submit" value="保存"/>
        </form>

            <h2>登録済み</h2>
            @foreach($weapons as $weapon )
            <p>{{ $weapon->id }}:{{ $weapon->name }}</p>
            @endforeach

       <div class='back'>[<a href='/'>back</a>]</div> 
    </body>
</html>