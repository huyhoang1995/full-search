<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('vi_VN'); // Set locale to Vietnamese

        foreach (range(1, 5000) as $index) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'address' => $faker->address,
                'status' => rand(0, 1), // Random 0 or 1 for status
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
