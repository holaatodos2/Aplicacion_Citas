<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SpecialtyRequest extends FormRequest
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
        'name' => [
            'required',
            'regex:/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/',
            Rule::unique('specialties')->ignore($this->route('id')),
        ],
    ];
}

    public function messages(){
        return [
            'name.required' => 'EL CAMPO NOMBRE ES OBLIGATORIO LLENAR.',
            'name.regex' => 'EL CAMPO NOMBRE SOLO ADMITE TEXTO.',
            'name.unique' => 'ESTA ESPECIALIDAD YA ESTÁ REGISTRADA.',
        ];
    }
}
