<?php

namespace App\Http\Requests;

use App\Ciudade;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCiudadeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('ciudade_edit');
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
