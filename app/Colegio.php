<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    protected $primaryKey = 'idColegio';
    protected $fillable = [ 
       'nombreColegio', 'mision', 'departamento',
    ];
}
