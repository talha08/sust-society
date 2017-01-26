<?php

use App\Committee;
use Illuminate\Database\Seeder;

class CommitteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Committee::create(['year' => '2017','is_current'=>'Running','dept_id' =>1 ]);
        Committee::create(['year' => '2016','is_current'=>'Previous','dept_id' =>1 ]);
        Committee::create(['year' => '2015','is_current'=>'Previous','dept_id' =>1 ]);
        Committee::create(['year' => '2014','is_current'=>'Previous','dept_id' =>1 ]);
    }
}
