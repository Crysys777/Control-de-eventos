<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $primaryKey = 'idActividad';
    protected $fillable = [ 
       'nombreActividad', 'categoria', 'id_Area',
    ];
}
