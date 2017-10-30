<?php

use Illuminate\Database\Seeder;
use App\Evaluacion;

class EvaluacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Evaluacion::class, 80)->create();
    }
}
