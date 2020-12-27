<?php

namespace App\Http\Requests;

use App\VetAnswer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVetAnswerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('vet_answer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:vet_answers,id',
        ];
    }
}
