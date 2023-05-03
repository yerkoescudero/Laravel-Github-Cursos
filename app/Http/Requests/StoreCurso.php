<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Reglas de validacion
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ];
    }

    //personalizacion de los atributos
    public function attributes()
    {
        return [
        'name' => 'nombre del curso',
        'descripcion' => 'descripcion del curso',
        'categoria' => 'categoria del curso'
        ];
    }

    public function messages()
    {
        return [
        'descripcion.required' => 'Debe ingresar una descripcion del curso'
        ];
    }
}
