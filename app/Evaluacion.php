<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{

	protected $primaryKey = 'idEvaluacion';
    protected $fillable = [
       'puntajeParcial', 'id_Actividad', 'id_Colegio',//'id_User',
    ];

		public function actividad()
	{
		return $this->belongsTo('App\Actividad', 'id_Actividad', 'idActividad');
	}

	public function colegio()
{
	return $this->belongsTo('App\Colegio', 'id_Colegio', 'idColegio');
}

public function puntajeTotal()
{
	return $this->hasMany('App\PuntajeTotal');
}

}
