<?php

namespace App\Http\Requests;

use App\AgentesEducativo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAgentesEducativoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('agentes_educativo_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:agentes_educativos,id',
        ];
    }
}
