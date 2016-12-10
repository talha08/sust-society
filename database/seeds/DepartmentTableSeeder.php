<?php

use Illuminate\Database\Seeder;
use App\Department;
class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create(['name' => 'CSE Society']);
        Department::create(['name' => 'EEE Society']);
        Department::create(['name' => 'CEE Society']);
        Department::create(['name' => 'GEB Society']);
        Department::create(['name' => 'MAT Society']);
        Department::create(['name' => 'PHY Society']);
        Department::create(['name' => 'CHE Society']);
    }
}
