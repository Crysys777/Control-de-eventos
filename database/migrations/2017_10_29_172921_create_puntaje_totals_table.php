<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntajeTotalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntaje_totals', function (Blueprint $table) {
            $table->increments('idPuntajeTotal');
            $table->integer('puntajeTotal');
            $table->integer('id_PuntajeExtra')->unsigned();
            $table->foreign('id_PuntajeExtra')->references('idPuntajeExtra')->on('puntaje_extras');
            $table->integer('id_Evaluacion')->unsigned();
            $table->foreign('id_Evaluacion')->references('idEvaluacion')->on('evaluacions');
            //$table->integer('id_Colegio')->unsigned();
            //$table->foreign('id_Colegio')->references('idColegio')->on('colegios');
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
        Schema::dropIfExists('puntaje_totals');
    }
}
