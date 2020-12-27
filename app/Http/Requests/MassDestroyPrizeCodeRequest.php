<?php

namespace App\Http\Requests;

use App\PrizeCode;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPrizeCodeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('prize_code_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:prize_codes,id',
        ];
    }
}
