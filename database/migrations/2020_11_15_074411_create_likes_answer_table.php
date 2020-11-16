<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes_answer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('like');
            $table->unsignedBigInteger('id_profile');
            $table->foreign('id_profile')->references('id')->on('profiles');
            $table->unsignedBigInteger('id_jawaban');
            $table->foreign('id_jawaban')->references('id')->on('answers');
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
        Schema::dropIfExists('likes_answer');
    }
}
