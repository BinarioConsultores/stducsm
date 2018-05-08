<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTramiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_tramite', function (Blueprint $table) {
            $table->increments('tram_id');
            $table->date('tram_fech');
            $table->string('tram_asun');
            $table->string('tram_obs');
            $table->string('tram_est');
            $table->string('tram_tipo');
            $table->integer('sol_id')->unsigned();
            $table->integer('usu_id')->unsigned();
            $table->integer('remi_id')->unsigned();
            $table->integer('clas_id')->unsigned();
            $table->foreign('sol_id')->references('sol_id')->on('t_solicitud');
            $table->foreign('usu_id')->references('id')->on('users');
            $table->foreign('remi_id')->references('remi_id')->on('t_remitente');
            $table->foreign('clas_id')->references('clas_id')->on('t_clasificacion');
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
        Schema::dropIfExist('t_tramite');
    }
}
