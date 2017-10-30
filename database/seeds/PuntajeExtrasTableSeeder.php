<?php

use Illuminate\Database\Seeder;
use App\PuntajeExtra;

class PuntajeExtrasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PuntajeExtra::class, 80)->create();
    }
}
