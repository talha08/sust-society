<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticeAttachmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notice_attachment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('notice_file_title');
            $table->string('notice_file');
            $table->integer('notice_id')->unsigned();
            $table->foreign('notice_id')->references('id')->on('notice')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('notice_attachment');
    }
}
