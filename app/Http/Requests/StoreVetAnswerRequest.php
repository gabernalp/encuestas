<?php

namespace App\Http\Requests;

use App\VetAnswer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreVetAnswerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('vet_answer_create');
    }

    public function rules()
    {
        return [
            'name'                            => [
                'string',
                'required',
            ],
            'vet_clinic'                      => [
                'string',
                'nullable',
            ],
            'vet_university'                  => [
                'string',
                'nullable',
            ],
            'pet_shelters'                    => [
                'string',
                'nullable',
            ],
            'department_id'                   => [
                'required',
                'integer',
            ],
            'city_id'                         => [
                'required',
                'integer',
            ],
            'email'                           => [
                'required',
            ],
            'pet_nutrition_question'          => [
                'required',
            ],
            'recomendations_applied'          => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'percent_apply_diet'              => [
                'required',
            ],
            'difficulty_change_food_owners'   => [
                'string',
                'required',
            ],
            'other_disease_5'                 => [
                'string',
                'nullable',
            ],
            'other_5'                         => [
                'string',
                'nullable',
            ],
            'other_bad_habit'                 => [
                'string',
                'nullable',
            ],
            'other_6'                         => [
                'string',
                'nullable',
            ],
            'food_type_recommendation'        => [
                'required',
            ],
            'food_recomendation_concentrates' => [
                'required',
            ],
            'percent_calories_concentrates'   => [
                'required',
            ],
            'country_best_food'               => [
                'required',
            ],
            'if_us_best_food'                 => [
                'required',
            ],
            'other_11'                        => [
                'string',
                'nullable',
            ],
            'not_recommended_food'            => [
                'string',
                'required',
            ],
            'frecuency_education'             => [
                'required',
            ],
            'heard_about_pfi'                 => [
                'required',
            ],
            'ip'                              => [
                'string',
                'nullable',
            ],
        ];
    }
}
