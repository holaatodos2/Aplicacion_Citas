<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required | regex:/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/',
            'email' => 'required | email | unique:users',
            'address' => 'required | string',
            'phone' => 'required | numeric | digits:9',
            'dni' => 'required | numeric | digits:8',
            'password' => 'required | string | min:8 | confirmed',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'EL CAMPO NOMBRE ES OBLIGATORIO LLENAR.',
            'name.regex' => 'EL CAMPO NOMBRE SOLO ADMITE TEXTO.',

            'email.required' => 'EL CAMPO CORREO ES OBLIGATORIO LLENAR.',
            'email.email' => 'EL FORMATO DEL CORREO NO ES VÁLIDO.',
            'email.unique' => 'ESTE CORREO ELECTRÓNICO YA ESTÁ REGISTRADO.',

            'address.required' => 'EL CAMPO DIRECCIÓN ES OBLIGATORIO LLENAR.',
            
            'phone.required' => 'EL CAMPO TELÉFONO ES OBLIGATORIO LLENAR.',
            'phone.numeric' => 'EL CAMPO TELÉFONO SOLO PERMITE NÚMEROS.',
            'phone.digits' => 'EL CAMPO TELÉFONO SOLO PERMITE 9 DÍGITOS.',

            'dni.required' => 'EL CAMPO DNI ES OBLIGATORIO LLENAR.',
            'dni.numeric' => 'EL CAMPO DNI SOLO PERMITE NÚMEROS.',
            'dni.digits' => 'EL CAMPO DNI SOLO PERMITE 8 DÍGITOS.',


            'password.required' => 'EL CAMPO CONTRASEÑA ES OBLIGATORIO LLENAR.',
            'password.min' => 'EL MÍNIMO DE DÍGITOS A INGRESAR ES 8.',
            'password.confirmed' => 'ES OBLIGATORIO CONFIRMAR LA CONTRASEÑA',

        ];
    }
}
