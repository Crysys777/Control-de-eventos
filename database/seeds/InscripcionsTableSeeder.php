<?php

use Illuminate\Database\Seeder;
use App\Inscripcion;

class InscripcionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Inscripcion::class, 80)->create();
    }
}
