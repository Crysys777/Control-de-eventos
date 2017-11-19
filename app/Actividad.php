<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $primaryKey = 'idActividad';
    protected $fillable = [
       'nombreActividad', 'categoria', 'id_Area',
    ];

    public function area()
	{
		return $this->belongsTo('App\Area', 'id_Area', 'idArea');
	}

  public function evaluacions()
  {
    return $this->hasMany('App\Evaluacion');
  }

}
