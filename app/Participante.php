<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $primaryKey = 'idParticipante';
    protected $fillable = [
       'primerNombre', 'segundoNombre', 'primerApellido', 'segundoApellido' , 'correoElectronico', 'sexo', 'ciParticipante', 'tallaPolera', 'tipoParticipante', 'id_Colegio',
    ];

    public function colegio()
	{
		return $this->belongsTo('App\Colegio', 'id_Colegio', 'idColegio');
    }
    
    public function scopeTallaPolera($query, $tallaPolera)
    {
        $tallaLista = config('tallaPolera.tallaList');

       if ($tallaPolera != "" && isset($tallaLista[$tallaPolera])) 
        {
            $query->where('tallaPolera', $tallaPolera);
        }
        else {
            
        }
        
    }

    public function scopeSexo($query, $sexo)
    {
        $sexoLista = config('sexo.sexoList');

       if ($sexo != "" && isset($sexoLista[$sexo]))
        {
            $query->where('sexo', $sexo);
        }
        else {
            
        }
    }

    public function scopeId_Colegio($query, $id_Colegio)
    {
       
        $colList = Colegio::pluck('idColegio', 'nombreColegio')->toArray();
    
        $colegios = array_flip($colList);

        if ($colegios != "" && isset($colegios[$id_Colegio])) 
        {
            $query->where('id_Colegio', $id_Colegio);
        }
        else {
            
        }
        
    }

}
