<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PuntajeTotalRequest extends FormRequest
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
            'puntajeTotal' => 'required',
            'id_PuntajeExtra' => 'required',
            'id_Evaluacion' => 'required'
            'id_Colegio' => 'required'
        ];
    }
}
