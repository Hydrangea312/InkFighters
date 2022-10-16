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

class TeamController extends Controller
{
    public function team_wanted(Team $team)
        {
          return view('posts/team_wanted')->with(['teams'=>$team->getPaginateByLimit()]);
        }
    public function team_post(Position $position,Weapon $weapon)
        {
          return view('posts/team_post')->with(['positions'=>$position->get() , 'weapons'=>$weapon->get()]);;
        }
        
    public function profile(Team $team)
        {
          return view('posts/team_profile')->with(['team'=>$team]);
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
}
