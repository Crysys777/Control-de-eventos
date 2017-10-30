<?php

use Illuminate\Database\Seeder;
use App\Participante;

class ParticipantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Participante::class, 80)->create();
    }
}
