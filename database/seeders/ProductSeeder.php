<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10000; $i++) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'start_price' => $faker->randomFloat(2, 1, 1000),
                'description' => $faker->sentence,
                'image_url' => $faker->imageUrl(),
                'status' => $faker->randomElement(['Nieuwstaat', 'Tweedehands']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }




    }
}
