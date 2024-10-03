<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Branch;
use App\Models\Status;
use App\Models\User;
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
            'image' => $faker->imageUrl(640, 480, 'animals', true),
            'address' => $faker->address,
            'price' => $faker->numberBetween(100, 1000),
            'rooms' => $faker->numberBetween(1, 5),
            'description' => $faker->paragraph,
            'users_id' => User::factory(),
            'branches_id' => Branch::factory(),
            'statuses_id' => Status::factory(),
        ]);
        Ad::factory()
            ->count(5)
            ->create();
    }
}
