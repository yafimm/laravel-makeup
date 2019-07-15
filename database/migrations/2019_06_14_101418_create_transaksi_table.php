<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->string('id', 10)->unique();
            $table->string('user', 30);
            $table->string('admin', 30);
            $table->string('total_harga');
            $table->integer('waktu');
            $table->integer('id_produk')->unsigned();
            $table->enum('status',['Belum Selesai', 'Selesai']);
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
        Schema::dropIfExists('transaksi');
    }
}
