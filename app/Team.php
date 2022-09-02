<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
       protected $fillable =[
        'title',
        'motivation',
        'number_applicants',
        'position_wanted',
        'weapon_wanted',
        'comment',
        ];
}
