<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->string('username', 30)->primary();
            $table->string('password');
            $table->string('nama', 50);
            $table->string('email');
            $table->enum('jenis_kelamin',['Pria', 'Wanita']);
            $table->string('foto')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('no_telp')->nullable();
            $table->timestamps();
        });

        Schema::table('user_akses', function (Blueprint $table){
            $table->foreign('username')
                ->references('username')
                ->on('user')
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
          $table->dropForeign('user_akses_username_foreign');
        });

        Schema::dropIfExists('user');
    }
}
