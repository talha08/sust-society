<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Profile::create(['designation' => 'Talha']);
        \App\Profile::create(['designation' => 'Faculty']);

    }
}
