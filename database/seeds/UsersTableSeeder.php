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
        User::create(['name' => 'Talha','email' => 'talhaqc@gmail.com','password' => bcrypt('a'),'dept_id' => 1]);
        User::create(['name' => 'Farzad','email' => 'farzad@gmail.com','password' => bcrypt('a'),'dept_id' => 2]);

    }
}
