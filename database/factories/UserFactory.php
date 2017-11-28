<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Colegio::class, function (Faker $faker) {

    return [
        'nombreColegio' => $faker->randomElement(['SANTA CRUZ', 'ELENA G. WHITE', 'MONTERO','VILLA BUSCH', 'TRINIDAD', 'ESPAADY'. 'PLAN 3000', 'PUERTO QUIJARRO', 'GUAYAMERÍN', 'SARMIENTO', 'UEAB', 'ELENA G. WHITE Oruro', 'ENTRE RIOS', 'COCHABAMBA', 'BAKER', 'CARANAVI', 'FRANZ TAMAYO', 'HARRY PITTMAN', 'MIRAFLORES', 'PALOS BLANCOS', 'VIACHA', 'SALOMON', 'LOS ANDES', 'REAL DEL SUR (PACAJES)', 'SHALOM', 'SAN JOSE']),
        'mision' => $faker->randomElement(['MOB', 'MCB', 'MBO']),
        'departamento' => $faker->randomElement(['Santa Cruz', 'Cochabamba', 'La Paz', 'Beni', 'Tarija', 'Oruro', 'Potosí', 'Chuquisaca', 'Pando']),


    ];
});

$factory->define(App\Participante::class, function (Faker $faker) {

    return [
        'primerNombre' => $faker->firstNameFemale,
        'segundoNombre' => $faker->firstNameFemale,
        'primerApellido' => $faker->lastname,
        'segundoApellido' => $faker->lastname,
        'correoElectronico' => $faker->email,
        'sexo' => $faker->randomElement(['M','F']),
        'ciParticipante' => $faker->numberBetween($min = 1000, $max = 9000),
        'tallaPolera' => $faker->randomElement(['S', 'M', 'L']),
        'tipoParticipante' => $faker->randomElement(['Estudiante', 'Director', 'Prof. de educación física', 'Asesor']),
        'id_Colegio' => $faker->numberBetween($min = 1, $max = 80),
    ];
});

$factory->define(App\Inscripcion::class, function (Faker $faker) {

    return [
        'colegioComprobante' => $faker->imageUrl($width = 640, $height = 480),
        'cantidadParticipante' => $faker->numberBetween($min = 20, $max = 120),
        'participanteComprobante' => $faker->imageUrl($width = 640, $height = 480),
        'montoColegio' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1000),
        'montoParticipante' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1000),
        'fechaInscripcion' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'id_Colegio' => $faker->numberBetween($min = 1, $max = 80),
    ];
});

$factory->define(App\DetalleInscripcion::class, function (Faker $faker) {

    return [
        'fechaBonus' => $faker->dateTime($max = 'now'),
        'fechaLimite' => $faker->dateTime($max = 'now'),
        'id_Inscripcion' => $faker->numberBetween($min = 1, $max = 80),
    ];
});

$factory->define(App\Evento::class, function (Faker $faker) {

    return [
        'nombreEvento' => $faker->randomElement(['Encuentro de promociones', 'Hackathon', 'Feria multidisciplinaria', 'Congreso Internacional de Ingeniería']),

    ];
});

$factory->define(App\Area::class, function (Faker $faker) {

    return [
        'nombreArea' => $faker->randomElement(['Área espiritual', 'Área física', 'Área mental', 'Área recreativa']),
        'id_Evento' => $faker->numberBetween($min = 1, $max = 80),
    ];
});

$factory->define(App\Actividad::class, function (Faker $faker) {

    return [
        'nombreActividad' => $faker->randomElement(['Fútbol', 'Natación libre 100 mts', 'Natación libre 100 mts', 'Natación espalda 100 mts', 'Natación pecho 100 mts', 'Natación mariposa 100 mts', 'Basket', 'Voleyball', 'Atletismo 100 mts', 'Atletismo 200 mts', 'Atletismo relevos', 'Salto largo', 'Conocimientos generales', 'Teatro', 'Ayuda comunitaria', 'Conocimientos bíblicos']),
        'categoria' => $faker->randomElement(['Varones', 'Damas', 'Mixto']),
        'id_Area' => $faker->numberBetween($min = 1, $max = 80),
    ];
});

$factory->define(App\Evaluacion::class, function (Faker $faker) {

    return [
        'puntajeParcial' => $faker->numberBetween($min = 1, $max = 100),
        'id_Actividad' => $faker->numberBetween($min = 1, $max = 10),
        //'id_User' => $faker->numberBetween($min = 1, $max = 1),
        'id_Colegio' => $faker->numberBetween($min = 1, $max = 80),

    ];
});

$factory->define(App\PuntajeExtra::class, function (Faker $faker) {

    return [
        'puntajeExtra' => $faker->numberBetween($min = 1, $max = 100),
        'descripcionPuntaje' => $faker->text(100),
        'id_Colegio' => $faker->numberBetween($min = 1, $max = 80),

    ];
});

$factory->define(App\PuntajeTotal::class, function (Faker $faker) {

    return [
        'puntajeTotal' => $faker->numberBetween($min = 1, $max = 100),
        'id_PuntajeExtra' => $faker->numberBetween($min = 1, $max = 80),
        'id_Evaluacion' => $faker->numberBetween($min = 1, $max = 80),
        'id_Colegio' => $faker->numberBetween($min = 1, $max = 80),
    ];
});
