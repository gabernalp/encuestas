<?php

namespace App\Http\Requests;

use App\Departamento;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDepartamentoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('departamento_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'code' => [
                'string',
                'nullable',
            ],
        ];
    }
}
