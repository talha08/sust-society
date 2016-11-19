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
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
