<?php

use Illuminate\Database\Seeder;
use App\Colegio;

class ColegiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Colegio::class, 80)->create();
    }
}
