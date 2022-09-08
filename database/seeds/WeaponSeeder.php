<?php

use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weapons')->insert([
       [ 'name' => 'スプラシューター',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ],
       [ 'name' => 'スプラシューターコラボ',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ],
    ]);
    }
}
