<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodTableSeeder extends Seeder
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
                'name' => 'Raddishes',
                'icon' => 'raddish',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Artichokes',
                'icon' => 'artichoke',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Broccoli',
                'icon' => 'broccoli',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cherries',
                'icon' => 'cherry',
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carrots',
                'icon' => 'carrot',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Steaks',
                'icon' => 'steak',
                'type' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('food')->insert($data);
    }
}
