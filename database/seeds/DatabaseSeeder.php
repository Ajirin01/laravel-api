<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(studentsTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        // $this->call(studentsTableSeeder::class);
    }
}
