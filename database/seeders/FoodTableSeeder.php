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
                'prime' => 4,
                'icon_name' => 'raddish',
                'icon_path' => 'raddish',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Artichokes',
                'prime' => 5,
                'icon_name' => 'artichoke',
                'icon_path' => 'artichoke',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Broccoli',
                'prime' => 7,
                'icon_name' => 'broccoli',
                'icon_path' => 'broccoli',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cherries',
                'prime' => 3,
                'icon_name' => 'cherry',
                'icon_path' => 'cherry',
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carrots',
                'prime' => 2,
                'icon_name' => 'carrot',
                'icon_path' => 'carrot',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Steaks',
                'prime' => 11,
                'icon_name' => 'steak',
                'icon_path' => 'steak',
                'type' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('food')->insert($data);
    }
}
