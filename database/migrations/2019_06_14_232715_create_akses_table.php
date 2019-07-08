<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAksesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('nilai_akses');
            $table->string('deskripsi');
            $table->integer('harga');
        });

        Schema::table('user_akses', function (Blueprint $table){
          $table->foreign('id_akses')
              ->references('id')
              ->on('akses')
              ->onDelete('cascade')
              ->onUpdate('cascade');
        });

        Schema::table('video', function (Blueprint $table){
            $table->foreign('hak_akses')
                ->references('id')
                ->on('akses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_akses', function(Blueprint $table){
          $table->dropForeign('user_akses_id_akses_foreign');
        });
        Schema::table('video', function(Blueprint $table){
          $table->dropForeign('video_hak_akses_foreign');
        });

        Schema::dropIfExists('akses');
    }
}
