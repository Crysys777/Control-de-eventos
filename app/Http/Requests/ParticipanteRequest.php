<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipanteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'primerNombre' => 'required',
            'segundoNombre' => 'required',
            'primerApellido' => 'required',
            'segundoApellido' => 'required',
            'sexo' => 'required',
            'correoElectronico' => 'required',
            'ciParticipante' => 'required',
            'tallaPolera' => 'required',
            'tipoParticipante' => 'required',
            'id_Colegio' => 'required',
        ];
    }
}
