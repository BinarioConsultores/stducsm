<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvinciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_provincia', function (Blueprint $table) {
            $table->increments('prov_id');
            $table->string('prov_desc');
            $table->integer('dpto_id')->unsigned();
            $table->foreign('dpto_id')->references('dpto_id')->on('t_departamento');
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
        Schema::dropIfExist('t_provincia');
    }
}
