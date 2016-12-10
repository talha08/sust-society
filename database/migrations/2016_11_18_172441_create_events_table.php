<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('headline');
            $table->string('description');
            $table->string('venue')->nullable();
           // $table->string('type');
            $table->string('start_time');
            $table->boolean('open_registration');  //boolean
            $table->string('end_time');
            $table->string('event_meta_data');
            $table->string('banner')->default('upload/event/banner/img-');

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
        Schema::drop('events');
    }
}
