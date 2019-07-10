<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_kategori', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kategori');
            $table->timestamps();
        });

        Schema::table('blog', function (Blueprint $table){
          $table->foreign('id_blog_kategori')
             ->references('id')
             ->on('blog_kategori')
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
        Schema::table('blog', function(Blueprint $table){
          $table->dropForeign('blog_id_blog_kategori_foreign');
        });
        Schema::dropIfExists('blog_kategori');
    }
}
