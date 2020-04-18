<?php

use Illuminate\Database\Seeder;

class studentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\students_model::class, 300)->create();
    }
}
