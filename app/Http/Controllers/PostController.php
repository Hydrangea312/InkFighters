<?php

namespace App\Http\Controllers;

use App\Opponent;
use App\Position;
use App\Post;
use App\Team;
use App\User;
use App\Weapon;

use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post,User $user)
    {
       return view('posts/index');//->with(['user'=>$user]);
    }
    
    public function question(Weapon $weapon)
    {
       return view('posts/question')->with(['weapons'=>$weapon->get()]);
    }
    
    public function weapon(Weapon $weapon)
    {
       return view('posts/weapon')->with(['weapons'=>$weapon->get()]);
    }
    
    public function profile(User $user)
    {
       return view('posts/profile')->with(['profiles'=>$user->get()]);
    }
    
        public function store_weapon(Weapon $weapon,PostRequest $request)
      {
        $input = $request['weapon'];
        $weapon->fill($input)->save();
        return redirect('/weapon/create');
      }
      
        public function store_user(User $user,PostRequest $request)
      {
        $input = $request['user'];
        $user->fill($input)->save();
        return redirect('/weapon/create');
      }
}  

