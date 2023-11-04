<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaisRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'director_name' => 'required',
            'approved' => 'required|boolean',
            'pai_code' => 'required'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => ':attribute es requerido.',
            'start_date.date' => ':attribute debe ser una fecha.',
            'start_date.required' => ':attribute es requerido.',
            'end_date.date' => ':attribute debe ser una fecha.',
            'end_date.required' => ':attribute es requerido.',
            'end_date.after' => ':attribute debe ser mayor a la fecha inicial.',
            'approved.required' => ':attribute es requerido.',
            'approved.boolean' => ':attribute debe ser true o false.',
            'pai_code.required' => ':attribute es requerido.',
        ];
    }


    public function attributes()
    {
        return [
            'name' => 'Nombre del PAI',
            'start_date' => 'La fecha de inicio',
            'end_date' => 'La fecha de finalización',
            'director_name' => 'Nombre del director',
            'approved' => 'Aprobado',
            'pai_code' => 'Código del PAI'
        ];
    }
}
