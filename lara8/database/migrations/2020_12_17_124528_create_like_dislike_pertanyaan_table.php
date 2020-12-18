<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_pertanyaan', function (Blueprint $table) {
            // $table->integer('pertanyaan_id');
            // $table->integer('profil_id');
            $table->integer('poin');
            // $table->unsignedBigInteger('profil_id');
            // $table->unsignedBigInteger('pertanyaan_id');
            // $table->foreign('profil_id')->references('id')->on('profile');
            // $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            // $table->primary(['pertanyaan_id','profil_id']);
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
        Schema::dropIfExists('like_dislike_pertanyaan');
    }
}
