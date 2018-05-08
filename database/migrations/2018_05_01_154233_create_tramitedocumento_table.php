<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTramitedocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_tramitedocumento', function (Blueprint $table) {
            $table->increments('tradoc_id');
            $table->integer('doc_id')->unsigned();
            $table->integer('tram_id')->unsigned();
            $table->foreign('doc_id')->references('doc_id')->on('t_documento');
            $table->foreign('tram_id')->references('tram_id')->on('t_tramite');
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
        Schema::dropIfExist('t_tramitedocumento');
    }
}
