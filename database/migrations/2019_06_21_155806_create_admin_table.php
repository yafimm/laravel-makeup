<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->string('username', 30)->primary();
            $table->integer('id_tipe_admin')->unsigned();
            $table->string('nama');
            $table->string('password');
            $table->string('email');
            $table->string('alamat');
            $table->string('no_telp');
            $table->timestamps();
        });

        Schema::table('video', function (Blueprint $table){
          $table->foreign('admin')
             ->references('username')
             ->on('admin')
             ->onDelete('cascade')
             ->onUpdate('cascade');
        });

        Schema::table('transaksi', function (Blueprint $table){
          $table->foreign('admin')
             ->references('username')
             ->on('admin')
             ->onDelete('restrict')
             ->onUpdate('cascade');
        });

        Schema::table('blog', function (Blueprint $table){
          $table->foreign('admin')
             ->references('username')
             ->on('admin')
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
      Schema::table('video', function(Blueprint $table){
        $table->dropForeign('video_admin_foreign');
      });

      Schema::table('transaksi', function(Blueprint $table){
        $table->dropForeign('transaksi_admin_foreign');
      });

      Schema::table('blog', function(Blueprint $table){
        $table->dropForeign('blog_admin_foreign');
      });
        Schema::dropIfExists('admin');
    }
}
