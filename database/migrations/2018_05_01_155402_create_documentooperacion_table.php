<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentooperacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_documentooperacion', function (Blueprint $table) {
            $table->increments('docop_id');
            $table->integer('doc_id')->unsigned();
            $table->integer('ope_id')->unsigned();
            $table->foreign('doc_id')->references('doc_id')->on('t_documento');
            $table->foreign('ope_id')->references('ope_id')->on('t_operacion');
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
        Schema::dropIfExist('t_documentooperacion');
    }
}
