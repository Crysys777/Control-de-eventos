<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleInscripcion extends Model
{
    protected $primaryKey = 'idDetalleInscripcion';
    protected $fillable = [
       'fechaBonus', 'fechaLimite', 'id_Inscripcion',
    ];
}
