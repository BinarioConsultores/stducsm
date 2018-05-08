<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemitenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_remitente', function (Blueprint $table) {
            $table->increments('remi_id');
            $table->string('remi_rzs');
            $table->string('remi_ruc');
            $table->string('remi_dni');
            $table->string('remi_tipo');
            $table->string('remi_cel');
            $table->string('remi_dir');
            $table->integer('dist_id')->unsigned();
            $table->foreign('dist_id')->references('dist_id')->on('t_distrito');
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
        Schema::dropIfExist('t_remitente');
    }
}
