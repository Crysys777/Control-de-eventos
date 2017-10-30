<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $primaryKey = 'idArea';
    protected $fillable = [ 
       'nombreArea',
    ];
}
