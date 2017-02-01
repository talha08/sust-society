<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notice', function (Blueprint $table) {
            $table->increments('id');
            $table->string('headline');
            $table->string('description');
            $table->string('notice_meta_data');
            $table->string('banner')->default('upload/notice/banner/upload.png');

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
        Schema::drop('notice');
    }
}
