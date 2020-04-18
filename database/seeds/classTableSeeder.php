<?php

use Illuminate\Database\Seeder;

class classTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\class_model::class, 100)->create();
    }
}
