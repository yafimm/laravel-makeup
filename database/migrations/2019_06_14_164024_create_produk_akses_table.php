<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukAksesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_akses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('akun_akses')->unsigned();
            $table->integer('harga');
            $table->integer('potongan_harga')->nullable();
            $table->string('waktu');
            $table->string('deskripsi');
            $table->timestamps();
        });

        Schema::table('transaksi', function (Blueprint $table){
            $table->foreign('id_produk')
                ->references('id')
                ->on('produk_akses')
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
        Schema::table('transaksi', function(Blueprint $table){
          $table->dropForeign('transaksi_id_produk_foreign');
        });

        Schema::dropIfExists('produk_akses');
    }
}
