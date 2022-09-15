<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('students')->insert([
                'first_name' => $faker->name,
                'last_name' => $faker->lastName,
                'identification_no' => $faker->randomDigit()
            ]);
        }
    }
}
