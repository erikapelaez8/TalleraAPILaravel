<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarEstudianteRequest extends FormRequest
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
            'nombre' => 'string|max:255',
            'apellido' => 'string|max:255',
            'edad' => 'integer|min:18|max:99',
            'correo' => 'string|email|max:255|unique:estudiantes,correo,' . $this->route('estudiante'),
            'direccion' => 'nullable|string|max:255',
            'fecha_nacimiento' => 'date',
            'genero' => 'string|in:Masculino,Femenino,Otro',
            'activo' => 'boolean',
            'promedio' => 'nullable|numeric|min:0|max:5',
        ];
    }
}
