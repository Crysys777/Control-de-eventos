<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegios', function (Blueprint $table) {
            $table->increments('idColegio');
            $table->string('nombreColegio');
            $table->enum('mision', ['MOB', 'MCB', 'MBO']);
            $table->enum('departamento', ['Santa Cruz', 'Cochabamba', 'La Paz', 'Beni', 'Tarija', 'Oruro', 'Potosí', 'Chuquisaca', 'Pando']);
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
        Schema::dropIfExists('colegios');
    }
}
