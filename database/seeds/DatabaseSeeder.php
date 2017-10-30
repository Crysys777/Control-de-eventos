<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ColegiosTableSeeder::class);
        $this->call(ParticipantesTableSeeder::class);
        $this->call(InscripcionsTableSeeder::class);
        $this->call(DetalleInscripcionsTableSeeder::class);
        $this->call(EventosTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(ActividadsTableSeeder::class);
        $this->call(EvaluacionsTableSeeder::class);
        $this->call(PuntajeExtrasTableSeeder::class);
        $this->call(PuntajeTotalsTableSeeder::class);
    }
}
