<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuntajeTotal extends Model
{
	protected $primaryKey = 'idPuntajeTotal';
    protected $fillable = [
       'puntajeTotal', 'id_PuntajeExtra', 'id_Evaluacion', 'id_Colegio',
    ];
}
