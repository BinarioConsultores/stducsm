<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_documento', function (Blueprint $table) {
            $table->increments('doc_id');
            $table->integer('doc_nrofol');
            $table->string('doc_nro');
            $table->string('doc_url');
            $table->string('doc_obs');
            $table->date('doc_fech');
            $table->integer('tdoc_id')->unsigned();
            $table->integer('usu_id')->unsigned();
            $table->foreign('tdoc_id')->references('tdoc_id')->on('t_tipodocumento');
            $table->foreign('usu_id')->references('id')->on('users');
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
        Schema::dropIfExist('t_documento');
    }
}
