<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'food_id' => 1,
                'price_usd' => 3,
                'price_nok' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'food_id' => 2,
                'price_usd' => 1,
                'price_nok' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'food_id' => 3,
                'price_usd' => 1,
                'price_nok' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'food_id' => 4,
                'price_usd' => 1,
                'price_nok' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'food_id' => 5,
                'price_usd' => 1.5,
                'price_nok' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'food_id' => 6,
                'price_usd' => 7,
                'price_nok' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('prime')->insert($data);
    }
}
