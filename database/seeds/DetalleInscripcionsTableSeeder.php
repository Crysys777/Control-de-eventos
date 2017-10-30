<?php

use Illuminate\Database\Seeder;
use App\DetalleInscripcion;

class DetalleInscripcionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DetalleInscripcion::class, 80)->create();
    }
}
