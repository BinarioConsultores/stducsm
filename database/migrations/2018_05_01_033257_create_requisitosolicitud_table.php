<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitosolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_requisitosolicitud', function (Blueprint $table) {
            $table->increments('reqsol_id');
            $table->integer('req_id')->unsigned();
            $table->integer('sol_id')->unsigned();
            $table->foreign('req_id')->references('req_id')->on('t_requisito');
            $table->foreign('sol_id')->references('sol_id')->on('t_solicitud');
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
        Schema::dropIfExist('t_requisitosolicitud');
    }
}
