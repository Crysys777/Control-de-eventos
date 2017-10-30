<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_inscripcions', function (Blueprint $table) {
            $table->increments('idDetalleInscripcion');
            $table->datetime('fechaBonus');
            $table->datetime('fechaLimite');
            $table->integer('id_Inscripcion')->unsigned();
            $table->foreign('id_Inscripcion')->references('idInscripcion')->on('inscripcions');           
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
        Schema::dropIfExists('detalle_inscripcions');
    }
}
