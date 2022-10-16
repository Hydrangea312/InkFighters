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

class OpponentController extends Controller
{
    
    public function opponent_post(Rule $rule,Opponent $opponent)
        {
          return view('posts/opponent_post')->with(['rules'=>$rule->get() , 'opponents'=>$opponent->get()]);
        }
        
     public function opponent_wanted(Request $request,Rule $rule)
      {
      $get =$request['rule'];
      $query = Opponent::query();

      if (isset($get)) 
      {
          $query->where('rule', $get);
      }
      
      $opponents = $query->orderBy('id', 'asc')->paginate(5);
      
      return view('posts/opponent_wanted')->with(['opponents'=>$opponents,'rules'=>$rule->get()]);
      
      }
      
    public function store_opponent(Opponent $opponent,PostRequest $request)
        {
          //dd($request->all());
          $input = $request['opponent'];
          $opponent->fill($input)->save();
          return redirect('/opponent/want');
        }
      
}
