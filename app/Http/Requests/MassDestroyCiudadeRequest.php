<?php

namespace App\Http\Requests;

use App\Ciudade;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCiudadeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('ciudade_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:ciudades,id',
        ];
    }
}
