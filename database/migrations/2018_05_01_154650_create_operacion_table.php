<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_operacion', function (Blueprint $table) {
            $table->increments('ope_id');
            $table->string('ope_obs');
            $table->date('ope_fecha');
            $table->string('ope_est');
            $table->integer('usuori_id')->unsigned();
            $table->integer('usudest_id')->unsigned();
            $table->integer('tram_id')->unsigned();
            $table->integer('tope_id')->unsigned();
            $table->foreign('usuori_id')->references('id')->on('users');
            $table->foreign('usudest_id')->references('id')->on('users');
            $table->foreign('tram_id')->references('tram_id')->on('t_tramite');
            $table->foreign('tope_id')->references('tope_id')->on('t_tipooperacion');
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
        Schema::dropIfExist('t_operacion');
    }
}
