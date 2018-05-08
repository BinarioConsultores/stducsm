<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('t_distrito', function (Blueprint $table) {
            $table->increments('dist_id');
            $table->string('dist_desc');
            $table->integer('prov_id')->unsigned();
            $table->foreign('prov_id')->references('prov_id')->on('t_provincia');
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
        Schema::dropIfExist('t_distrito');
    }
}
