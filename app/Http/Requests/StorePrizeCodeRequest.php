<?php

namespace App\Http\Requests;

use App\PrizeCode;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePrizeCodeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('prize_code_create');
    }

    public function rules()
    {
        return [
            'code'       => [
                'string',
                'nullable',
            ],
            'poll_name'  => [
                'string',
                'nullable',
            ],
            'contestant' => [
                'string',
                'nullable',
            ],
        ];
    }
}
