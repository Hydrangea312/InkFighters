<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opponent extends Model
{
       protected $fillable =[
        'id',
        'rule',
        'win_number',
        'rank',
        'comment',
        'friendcode'
        ];
}
