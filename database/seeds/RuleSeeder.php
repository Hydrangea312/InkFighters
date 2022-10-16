<?php

use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rules')->insert([
       [ 'name' => 'エリア',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ],
       [ 'name' => 'ヤグラ',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ],
        [ 'name' => 'ホコ',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ],
        [ 'name' => 'アサリ',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ],
    ]);
    }
}
