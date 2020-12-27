<?php

namespace App\Http\Requests;

use App\AgentesEducativo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAgentesEducativoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('agentes_educativo_edit');
    }

    public function rules()
    {
        return [
            'nombre'           => [
                'string',
                'required',
            ],
            'apellido'         => [
                'string',
                'required',
            ],
            'documento'        => [
                'string',
                'required',
            ],
            'telefono_celular' => [
                'string',
                'nullable',
            ],
            'terminos'         => [
                'required',
            ],
            'ip'               => [
                'string',
                'nullable',
            ],
        ];
    }
}
