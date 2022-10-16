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
        public function rules()
        {
            return $this->belongsTo('App\Rule');
        }
        
        public function getPaginateByLimit(int $limit_count = 5)//ぺジネーション
        {
            return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
        }

}
