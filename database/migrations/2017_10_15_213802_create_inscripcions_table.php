<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->increments('idInscripcion');
            $table->binary('colegioComprobante');
            $table->integer('cantidadParticipante');
            $table->binary('participanteComprobante');
            $table->decimal('montoColegio');
            $table->decimal('montoParticipante');
            $table->date('fechaInscripcion');
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
        Schema::dropIfExists('inscripcions');
    }
}
