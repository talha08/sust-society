<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Talha','email' => 'talha@gmail.com','password' => bcrypt('a')]);
        User::create(['name' => 'Farzad','email' => 'farzad@gmail.com','password' => bcrypt('a')]);

    }
}
