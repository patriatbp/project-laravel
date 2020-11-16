<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments_answer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi');
            $table->date('tanggal_dibuat');
            $table->unsignedBigInteger('id_profile');
            $table->foreign('id_profile')->references('id')->on('profiles');
            $table->unsignedBigInteger('id_pertanyaan');
            $table->foreign('id_pertanyaan')->references('id')->on('answers');
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
        Schema::dropIfExists('comments_answer');
    }
}
