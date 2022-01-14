<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrimesTableSeeder extends Seeder
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
                'prime_usd' => 3,
                'prime_nok' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'food_id' => 2,
                'prime_usd' => 1,
                'prime_nok' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'food_id' => 3,
                'prime_usd' => 1,
                'prime_nok' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'food_id' => 4,
                'prime_usd' => 1,
                'prime_nok' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'food_id' => 5,
                'prime_usd' => 1.5,
                'prime_nok' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'food_id' => 6,
                'prime_usd' => 7,
                'prime_nok' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('primes')->insert($data);
    }
}
