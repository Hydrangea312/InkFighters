<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    public function opponents()   
{
    return $this->hasMany('App\Opponent');  
}

}
