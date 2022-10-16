<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opponent;
use App\Position;
use App\Post;
use App\Team;
use App\User;
use App\Weapon;
use App\Rule;

use App\Http\Requests\PostRequest;

class PostController extends Controller
        {
        public function index(Weapon $weapon,User $user,Request $request)
        {
           return view('posts/index')->with(['users'=>$user->get()]);
        }
      
}  

