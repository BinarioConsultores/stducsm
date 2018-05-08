<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialoperacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_historialoperacion', function (Blueprint $table) {
            $table->increments('hop_id');
            $table->string('hop_est');
            $table->date('hop_fecha');
            $table->integer('ope_id')->unsigned();
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
        Schema::dropIfExist('t_historialoperacion');
    }
}
