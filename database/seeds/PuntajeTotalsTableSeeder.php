<?php

use Illuminate\Database\Seeder;
use App\PuntajeTotal;

class PuntajeTotalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PuntajeTotal::class, 80)->create();
    }
}
