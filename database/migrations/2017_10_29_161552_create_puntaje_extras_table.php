<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntajeExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntaje_extras', function (Blueprint $table) {
            $table->increments('idPuntajeExtra');
            $table->integer('puntajeExtra');
            $table->string('descripcionPuntaje');
            $table->integer('id_Colegio')->unsigned();
            $table->foreign('id_Colegio')->references('idColegio')->on('colegios');
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
        Schema::dropIfExists('puntaje_extras');
    }
}
