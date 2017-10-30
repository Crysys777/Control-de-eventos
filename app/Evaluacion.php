<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{

	protected $primaryKey = 'idEvaluacion';
    protected $fillable = [
       'puntajeParcial', 'id_Actividad', 'id_Colegio',//'id_User', 
    ];
    
}
