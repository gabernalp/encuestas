<?php

namespace App\Http\Requests;

use App\DogsOwnersAnwer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDogsOwnersAnwerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('dogs_owners_anwer_edit');
    }

    public function rules()
    {
        return [
            'name'                    => [
                'string',
                'required',
            ],
            'email'                   => [
                'string',
                'required',
            ],
            'department_id'           => [
                'required',
                'integer',
            ],
            'city_id'                 => [
                'required',
                'integer',
            ],
            'dog_appear'              => [
                'required',
            ],
            'other_1'                 => [
                'string',
                'nullable',
            ],
            'dog_consideration'       => [
                'required',
            ],
            'other_2'                 => [
                'string',
                'nullable',
            ],
            'dog_food_advice'         => [
                'required',
            ],
            'dog_food_choose'         => [
                'required',
            ],
            'other_4'                 => [
                'string',
                'nullable',
            ],
            'dog_diff_nutrition'      => [
                'required',
            ],
            'dog_diet_owner'          => [
                'required',
            ],
            'dog_food_type'           => [
                'required',
            ],
            'other_8'                 => [
                'string',
                'nullable',
            ],
            'dog_percent_concentrate' => [
                'required',
            ],
            'dog_candies'             => [
                'string',
                'nullable',
            ],
            'dog_change_food'         => [
                'string',
                'required',
            ],
            'other_12'                => [
                'string',
                'nullable',
            ],
            'other_14'                => [
                'string',
                'nullable',
            ],
            'heard_about_pfi'         => [
                'required',
            ],
            'ip'                      => [
                'string',
                'nullable',
            ],
        ];
    }
}
