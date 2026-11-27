<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EvidenciaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
           'estudiante_id' => ['required', 'integer', 'min:1'],
           'tarea_id' => ['required', 'integer', 'min:1'],
           'url' => ['required', 'url', 'max:2048'],
           'descripcion' => ['required', 'string'],
           'estado_validacion' => ['required', 'in:pendiente,validada,rechazada,asignada']
        ];
    }

    public function messages(): array
    {
        return [
            'estudiante_id.required' => 'El campo Estudiante es obligatorio',
            'tarea_id.required' => 'El campo Tarea es obligatorio',
            'url.required' => 'La dirección de la evidencia no es una URL válida.',
            'descripcion.required' => 'El campo Descripcion es obligatorio',
            'estado_validacion.required' => 'Selecciona un estado de validacion'
        ];
    }
}
