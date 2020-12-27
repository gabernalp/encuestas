<?php

namespace App\Http\Requests;

use App\DogsOwnersAnwer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyDogsOwnersAnwerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('dogs_owners_anwer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:dogs_owners_anwers,id',
        ];
    }
}
