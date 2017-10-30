<?php

use Illuminate\Database\Seeder;
use App\Actividad;

class ActividadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Actividad::class,20)->create();
    }
}
