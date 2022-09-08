<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
       protected $fillable =[
        'id',
        'name',
        ];
        
    public function users()
    {
    return $this->belongsToMany('App\User');
    }
    
    public function teams()
    {
    return $this->belongsToMany('App\Team');
    }
}
