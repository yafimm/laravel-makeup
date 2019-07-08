<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipeAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipe_admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_tipe_admin');
        });


        Schema::table('admin', function (Blueprint $table){
    			$table->foreign('id_tipe_admin')
    				 ->references('id')
    				 ->on('tipe_admin')
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
      Schema::table('admin', function(Blueprint $table){
        $table->dropForeign('admin_id_tipe_admin_foreign');
      });
        Schema::dropIfExists('tipe_admin');
    }
}
