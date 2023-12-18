<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorUpdateRequest extends FormRequest
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
            'email' => 'required | email ',
            'address' => 'required | string',
            'phone' => 'required | numeric | digits:9',
            'dni' => 'required | numeric | digits:8',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'EL CAMPO NOMBRE ES OBLIGATORIO LLENAR.',
            'name.regex' => 'EL CAMPO NOMBRE SOLO ADMITE TEXTO.',

            'email.required' => 'EL CAMPO CORREO SE DEBE DE LLENAR.',
            'email.email' => 'EL FORMATO DEL CORREO NO ES VÁLIDO.',

            'address.required' => 'EL CAMPO DIRECCIÓN ES OBLIGATORIO LLENAR.',

            'phone.required' => 'EL CAMPO TELÉFONO ES OBLIGATORIO LLENAR.',
            'phone.numeric' => 'EL CAMPO TELÉFONO SOLO PERMITE NÚMEROS.',
            'phone.digits' => 'EL CAMPO TELÉFONO SOLO PERMITE 9 DÍGITOS.',

            'dni.required' => 'EL CAMPO DNI ES OBLIGATORIO LLENAR.',
            'dni.numeric' => 'EL CAMPO DNI SOLO PERMITE NÚMEROS.',
            'dni.digits' => 'EL CAMPO DNI SOLO PERMITE 8 DÍGITOS.',
        ];
    }
}
