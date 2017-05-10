<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class EntrustTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('name',config('customConfig.roles.admin'))->first();
        $teacher = Role::where('name',config('customConfig.roles.teacher'))->first();
        $student = Role::where('name',config('customConfig.roles.student'))->first();
        $dept_admin= Role::where('name',config('customConfig.roles.dept_admin'))->first();

        $adminUser = User::first();
        $adminUser->attachRole($admin);


        $getAllusers = User::all();
        foreach ($getAllusers as $person) {
            $person->attachRole($student);
        }
    }
}
