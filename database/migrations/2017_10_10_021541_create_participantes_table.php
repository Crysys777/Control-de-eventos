<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->increments('idParticipante');
            $table->string('primerNombre');
            $table->string('segundoNombre');
            $table->string('primerApellido');
            $table->string('segundoApellido');
            $table->string('correoElectronico');
            $table->enum('sexo', ['M', 'F']);
            $table->integer('ciParticipante');
            $table->enum('tallaPolera', ['S', 'M', 'L']);
            $table->enum('tipoParticipante', ['Estudiante', 'Director', 'Prof. de educación física', 'Asesor']);
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
        Schema::dropIfExists('participantes');
    }
}
