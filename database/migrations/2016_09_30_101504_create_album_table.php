<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumTable extends Migration
{
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            $table->increments('id');
            $table->string('album_title')->nullable();
            $table->integer('user_id')->unsigned();
            $table->text('album_details')->nullable();

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
        Schema::drop('album');
    }
}
