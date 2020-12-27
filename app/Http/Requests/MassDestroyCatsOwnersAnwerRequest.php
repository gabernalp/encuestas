<?php

namespace App\Http\Requests;

use App\CatsOwnersAnwer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCatsOwnersAnwerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cats_owners_anwer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:cats_owners_anwers,id',
        ];
    }
}
