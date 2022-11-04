<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory(1)->create(['name'=>'Test','email'=>'test@test.com']);
        User::factory(10)->create();
        $this->call([
            PeopleTableSeeder::class,
            CarsTableSeeder::class,
            NationalitiesTableSeeder::class,
        ]);

    }
}
