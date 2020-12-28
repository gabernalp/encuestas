@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.vetAnswer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.vet-answers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.id') }}
                        </th>
                        <td>
                            {{ $vetAnswer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.name') }}
                        </th>
                        <td>
                            {{ $vetAnswer->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.vet_clinic') }}
                        </th>
                        <td>
                            {{ $vetAnswer->vet_clinic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.vet_university') }}
                        </th>
                        <td>
                            {{ $vetAnswer->vet_university }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.pet_shelters') }}
                        </th>
                        <td>
                            {{ $vetAnswer->pet_shelters }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.department') }}
                        </th>
                        <td>
                            {{ $vetAnswer->department->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.city') }}
                        </th>
                        <td>
                            {{ $vetAnswer->city->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.email') }}
                        </th>
                        <td>
                            {{ $vetAnswer->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.pet_nutrition_question') }}
                        </th>
                        <td>
                            {{ App\VetAnswer::PET_NUTRITION_QUESTION_RADIO[$vetAnswer->pet_nutrition_question] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.recomendations_applied') }}
                        </th>
                        <td>
                            {{ $vetAnswer->recomendations_applied }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.percent_apply_diet') }}
                        </th>
                        <td>
                            {{ App\VetAnswer::PERCENT_APPLY_DIET_RADIO[$vetAnswer->percent_apply_diet] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.difficulty_change_food_owners') }}
                        </th>
                        <td>
                            {{ $vetAnswer->difficulty_change_food_owners }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.obesity_5') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $vetAnswer->obesity_5 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.malnutrition_5') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $vetAnswer->malnutrition_5 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.allergies_5') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $vetAnswer->allergies_5 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.gastritis_5') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $vetAnswer->gastritis_5 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.diarrhea_5') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $vetAnswer->diarrhea_5 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.periodontal_5') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $vetAnswer->periodontal_5 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.other_disease_5') }}
                        </th>
                        <td>
                            {{ $vetAnswer->other_disease_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.other_5') }}
                        </th>
                        <td>
                            {{ $vetAnswer->other_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.mix_food_6') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $vetAnswer->mix_food_6 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.food_outtime') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $vetAnswer->food_outtime ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.water_not_enough') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $vetAnswer->water_not_enough ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.quantities_control') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $vetAnswer->quantities_control ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.plate_higiene') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $vetAnswer->plate_higiene ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.other_bad_habit') }}
                        </th>
                        <td>
                            {{ $vetAnswer->other_bad_habit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.other_6') }}
                        </th>
                        <td>
                            {{ $vetAnswer->other_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.food_type_recommendation') }}
                        </th>
                        <td>
                            {{ App\VetAnswer::FOOD_TYPE_RECOMMENDATION_RADIO[$vetAnswer->food_type_recommendation] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.food_recomendation_concentrates') }}
                        </th>
                        <td>
                            {{ App\VetAnswer::FOOD_RECOMENDATION_CONCENTRATES_RADIO[$vetAnswer->food_recomendation_concentrates] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.percent_calories_concentrates') }}
                        </th>
                        <td>
                            {{ App\VetAnswer::PERCENT_CALORIES_CONCENTRATES_RADIO[$vetAnswer->percent_calories_concentrates] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.country_best_food') }}
                        </th>
                        <td>
                            {{ $vetAnswer->country_best_food }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.if_us_best_food') }}
                        </th>
                        <td>
                            {{ App\VetAnswer::IF_US_BEST_FOOD_RADIO[$vetAnswer->if_us_best_food] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.other_11') }}
                        </th>
                        <td>
                            {{ $vetAnswer->other_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.not_recommended_food') }}
                        </th>
                        <td>
                            {{ $vetAnswer->not_recommended_food }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.frecuency_education') }}
                        </th>
                        <td>
                            {{ App\VetAnswer::FRECUENCY_EDUCATION_RADIO[$vetAnswer->frecuency_education] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.heard_about_pfi') }}
                        </th>
                        <td>
                            {{ App\VetAnswer::HEARD_ABOUT_PFI_RADIO[$vetAnswer->heard_about_pfi] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.ip') }}
                        </th>
                        <td>
                            {{ $vetAnswer->ip }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.vet-answers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection