<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required'
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
            'email.required' => ':attribute es requerido!',
            'email.email' => ':attribute no tiene el formato adecuado!',
            'password.required' => ':attribute es requerido!'
        ];
    }


    public function attributes()
    {
        return [
            'email' => 'Correo',
            'password' => 'contraseña',
        ];
    }
}
