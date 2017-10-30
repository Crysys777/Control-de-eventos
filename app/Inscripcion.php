<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{

    protected $primaryKey = 'idInscripcion';
    protected $fillable = [
       'colegioComprobante', 'cantidadParticipante', 'participanteComprobante', 'montoColegio' , 'montoParticipante', 'fechaInscripcion', 'id_Colegio',
    ];


}
