<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitteeMemberListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_member_list', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('committee_id')->unsigned();
            $table->foreign('committee_id')->references('id')->on('committee')->onUpdate('cascade')->onDelete('cascade');

            //no need
         //  $table->integer('order'); // 1 for president, 2 for cashier, 3 for vP, 4 for Gs, 5 for Ags, 6 for Os, 7 Member


            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');


            $table->integer('member_type_id')->unsigned();
            $table->foreign('member_type_id')->references('id')->on('committee_member_type')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('committee_member_list');
    }
}
