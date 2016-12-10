<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeptSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dept_slider', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slider_path');

            $table->integer('dept_id')->unsigned();
            $table->foreign('dept_id')->references('id')->on('department')->onUpdate('cascade')->onDelete('cascade');



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
        Schema::drop('dept_slider');
    }
}
