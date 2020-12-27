<?php

namespace App\Http\Requests;

use App\CatsOwnersAnwer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCatsOwnersAnwerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cats_owners_anwer_edit');
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
            'cat_appear'              => [
                'required',
            ],
            'other_1'                 => [
                'string',
                'nullable',
            ],
            'cat_consideration'       => [
                'required',
            ],
            'other_2'                 => [
                'string',
                'nullable',
            ],
            'cat_food_advice'         => [
                'required',
            ],
            'cat_food_choose'         => [
                'required',
            ],
            'other_4'                 => [
                'string',
                'nullable',
            ],
            'cat_diff_nutrition'      => [
                'required',
            ],
            'cat_diet_owner'          => [
                'required',
            ],
            'cat_food_type'           => [
                'required',
            ],
            'other_8'                 => [
                'string',
                'nullable',
            ],
            'cat_percent_concentrate' => [
                'required',
            ],
            'cat_candies'             => [
                'string',
                'nullable',
            ],
            'cat_change_food'         => [
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
