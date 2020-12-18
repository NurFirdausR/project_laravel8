<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkDislikeJawabanToLikeDislikeJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('like_dislike_jawaban', function (Blueprint $table) {
            $table->unsignedBigInteger('profil_id');
            $table->unsignedBigInteger('jawaban_id');
            $table->foreign('profil_id')->references('id')->on('profile');
            $table->foreign('jawaban_id')->references('id')->on('jawaban');
            $table->primary(['jawaban_id','profil_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('like_dislike_jawaban', function (Blueprint $table) {
            $table->dropForeign(['profil_id','jawaban_id']);
            $table->dropColumn(['profil_id','jawaban_id']);
        });
    }
}
