<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuntajeTotal extends Model
{
	protected $primaryKey = 'idPuntajeTotal';
    protected $fillable = [
       'puntajeTotal', 'id_PuntajeExtra', 'id_Evaluacion', //'id_Colegio',
    ];

		public function puntajeExtra()
  {
  	return $this->belongsTo('App\PuntajeExtra', 'id_PuntajeExtra', 'idPuntajeExtra');
  }

	public function evaluacion()
{
	return $this->belongsTo('App\Evaluacion', 'id_Evaluacion', 'idEvaluacion');
}
}
