<?php

use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
         [ 'name' => '前衛',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ],
       [ 'name' => '中衛',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ],
       [ 'name' => '後衛',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ],
       [ 'name' => '塗り特化',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ],
       [ 'name' => 'キル特化',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ],
    ]);
    

    }
}
