<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->increments('idEvaluacion');
            $table->integer('puntajeParcial');
            $table->integer('id_Actividad')->unsigned();
            $table->foreign('id_Actividad')->references('idActividad')->on('actividads');
            //$table->integer('id_User')->unsigned();
            //$table->foreign('id_User')->references('id')->on('users');
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
        Schema::dropIfExists('evaluacions');
    }
}
