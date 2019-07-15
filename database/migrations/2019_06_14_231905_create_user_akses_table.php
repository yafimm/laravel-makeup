<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAksesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_akses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 30);
            $table->integer('id_akses')->unsigned();
            $table->enum('status', ['Aktif','Tidak Aktif']);
            $table->date('waktu_berakhir');
            $table->date('waktu_mulai');
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
        Schema::dropIfExists('user_akses');
    }
}
