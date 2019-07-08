<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_blog_kategori')->unsigned();
            $table->string('judul')->nullable();
            $table->string('slug')->nullable();
            $table->text('isi_blog');
            $table->string('admin', 30);
            $table->timestamps();
        });

        Schema::table('gambar', function (Blueprint $table){
          $table->foreign('id_blog')
             ->references('id')
             ->on('blog')
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
      Schema::table('gambar', function(Blueprint $table){
        $table->dropForeign('gambar_id_blog_foreign');
      });
        Schema::dropIfExists('blog');
    }
}
