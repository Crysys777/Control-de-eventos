<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuntajeExtra extends Model
{
    protected $primaryKey = 'idPuntajeExtra';
    protected $fillable = [
       'puntajeExtra', 'descripcionPuntaje', 'id_Colegio',
    ];

    public function colegio()
  {
  	return $this->belongsTo('App\Colegio', 'id_Colegio', 'idColegio');
  }

  public function puntajeTotal()
  {
    return $this->hasMany('App\PuntajeTotal');
  }
}
