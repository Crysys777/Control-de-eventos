<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $primaryKey = 'idArea';
    protected $fillable = [
       'nombreArea', 'id_Evento',
    ];

    public function evento()
	{
		return $this->belongsTo('App\Evento', 'id_Evento', 'idEvento');
	}
}
