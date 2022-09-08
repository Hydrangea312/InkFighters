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
         return view('posts/index')->with(['users'=>$user->get()]);
        }
        
        public function question(Weapon $weapon,User $user)
        {
         return view('posts/question')->with(['weapons'=>$weapon->get() , 'users'=>$user->get()]);
        }
        
        public function weapon(Weapon $weapon)
        {
         return view('posts/weapon')->with(['weapons'=>$weapon->get()]);
        }
        
        public function profile(User $user)
        {
         return view('posts/profile')->with(['users'=>$user , 'weapons'=>$weapon->get()]);
        }
        
        public function team_wanted(Team $team)
        {
          return view('posts/team_wanted')->with(['teams'=>$team->get()]);
        }
        
        public function team_post(Position $position,Weapon $weapon)
        {
          return view('posts/team_post')->with(['positions'=>$position->get() , 'weapons'=>$weapon->get()]);;
        }
        
        public function team_post2(Position $position,Weapon $weapon)
        {
          return view('posts/team_post2')->with(['positions'=>$position->get() , 'weapons'=>$weapon->get()]);;
        }
        
        public function store_weapon(Weapon $weapon,PostRequest $request)
        {
          $input = $request['weapon'];
          $weapon->fill($input)->save();
          return redirect('/weapon/create');
        }
        
        public function store_team(PostRequest $request, Team $team ,Weapon $weapon)
        {
            
            $input_team = $request['team'];
            $input_positions = $request->positions_array;
            $input_weapons = $request->weapons_array;
     
            $team->fill($input_team)->save();
            
            $team->positions()->attach($input_positions); 
            $team->weapons()->attach($input_weapons);
            return redirect('/team/want');
        }
        
        public function store_user(User $user,PostRequest $request)
        {
          $input = $request['user'];
          $user->fill($input)->save();
          return redirect('/weapon/create');
        }
      
      
}  

