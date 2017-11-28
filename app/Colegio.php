<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    protected $primaryKey = 'idColegio';
    protected $fillable = [
       'nombreColegio', 'mision', 'departamento',
    ];


    public function inscripcions()
    {
    	return $this->hasMany('App\Inscripcion');
    }
    public function participantes()
    {
    	return $this->hasMany('App\Participante');
    }
    public function evaluacions()
    {
    	return $this->hasMany('App\Evaluacion');
    }
    public function puntajeExtras()
    {
    	return $this->hasMany('App\PuntajeExtra');
    }
    public function puntajeTotals()
    {
    	return $this->hasMany('App\PuntajeTotal');
    }
}
