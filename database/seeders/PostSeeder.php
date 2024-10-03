<?php

namespace Database\Seeders;

use App\Models\Ad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('ads')->insert([
            'title' => $faker->sentence(5),
            'address' => $faker->address,
            'price' => $faker->numberBetween(100, 1000),
            'rooms' => $faker->numberBetween(1, 5),
            'description' => $faker->paragraph,
            'users_id' => 1,
            'branches_id' => 1,
            'statuses_id' => 1,
        ]);
        Ad::factory()
            ->count(5)
            ->create();
    }
}
