<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $primaryKey = 'idParticipante';
    protected $fillable = [
       'primerNombre', 'segundoNombre', 'primerApellido', 'segundoApellido' , 'correoElectronico', 'sexo', 'ciParticipante', 'tallaPolera', 'tipoParticipante', 'id_Colegio',
    ];
}
