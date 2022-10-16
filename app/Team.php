<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
       protected $fillable =[
        'team',
        'motivation',
        'number_applicant',
        'position_wanted',
        'weapon_wanted',
        'comment',
        'friendcode'
        ];
        
        public function users()
        {
            return $this->hasMany('App\User');
        }
        
        public function weapons()
        {
            return $this->belongsToMany('App\Weapon');
        }
        
        public function positions()
        {
            return $this->belongsToMany('App\Position');//リレーション
        }
        
        public function getPaginateByLimit(int $limit_count = 5)//ぺジネーション
        {
            return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
        }

}
