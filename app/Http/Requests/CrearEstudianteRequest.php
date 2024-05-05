<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearEstudianteRequest extends FormRequest
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
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'edad' => 'required|integer|min:18|max:99',
            'correo' => 'required|string|email|max:255|unique:estudiantes',
            'direccion' => 'nullable|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'genero' => 'required|string|in:Masculino,Femenino,Otro',
            'activo' => 'required|boolean',
            'promedio' => 'nullable|numeric|min:0|max:5',
        ];
    }
}
