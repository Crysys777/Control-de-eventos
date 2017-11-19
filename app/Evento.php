<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $primaryKey = 'idEvento';
    protected $fillable = [
       'nombreEvento',
    ];

    public function areas()
    {
    	return $this->hasMany('App\Area');
    }
}

