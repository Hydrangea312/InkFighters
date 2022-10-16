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
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\PostRequest;

class UserController extends Controller
{
    
     public function question(Weapon $weapon,User $user)
        {
         return view('posts/question')->with(['weapons'=>$weapon->get() , 'users'=>$user->get()]);
         
        }
        
     public function profile(User $user)
        {
         return view('posts/profile')->with(['users'=>$user]);
        }
        
    public function team(Request $request)
        {
        $user = Auth::user();
        $input_team = $request['team'] ;
        $user->team = $input_team;
        $user->save();
        return redirect('/profile/'. Auth::user()->id );
        }
        
 
       
    public function store_user(Request $request)
        {
        $user = Auth::user();
        $input_user = $request['user'];
        $input_weapons = $request->weapons_array;
        $input_positions = $request->positions_array;
        
        $user->friendcode = $request['user']['friendcode'];
        $user->question=1;
        $user->save();
        
        $user->weapons()->attach($input_weapons);
        $user->positions()->attach($input_positions);
        return redirect('/profile/'. Auth::user()->id );
        }

}
