<?php

use App\CommitteeMemberType;
use Illuminate\Database\Seeder;

class CommitteeMemberTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CommitteeMemberType::create(['name' => 'President']);
        CommitteeMemberType::create(['name' => 'Vice President']);
        CommitteeMemberType::create(['name' => 'General Secretary']);
        CommitteeMemberType::create(['name' => 'Assitant General Secretary']);
        CommitteeMemberType::create(['name' => 'Organization Secretary']);
        CommitteeMemberType::create(['name' => 'Em(4/1)']);
        CommitteeMemberType::create(['name' => 'Em(3/1)']);
        CommitteeMemberType::create(['name' => 'Em(2/1)']);
        CommitteeMemberType::create(['name' => 'Em(1/1)']);
    }
}
