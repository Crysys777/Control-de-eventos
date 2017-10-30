<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuntajeExtra extends Model
{
    protected $primaryKey = 'idPuntajeExtra';
    protected $fillable = [
       'puntajeExtra', 'descripcionPuntaje', 'id_Colegio',
    ];
}
