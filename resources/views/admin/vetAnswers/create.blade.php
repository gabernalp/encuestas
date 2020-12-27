@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.vetAnswer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.vet-answers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.vetAnswer.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="vet_clinic">{{ trans('cruds.vetAnswer.fields.vet_clinic') }}</label>
                <input class="form-control {{ $errors->has('vet_clinic') ? 'is-invalid' : '' }}" type="text" name="vet_clinic" id="vet_clinic" value="{{ old('vet_clinic', '') }}">
                @if($errors->has('vet_clinic'))
                    <span class="text-danger">{{ $errors->first('vet_clinic') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.vet_clinic_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="vet_university">{{ trans('cruds.vetAnswer.fields.vet_university') }}</label>
                <input class="form-control {{ $errors->has('vet_university') ? 'is-invalid' : '' }}" type="text" name="vet_university" id="vet_university" value="{{ old('vet_university', '') }}">
                @if($errors->has('vet_university'))
                    <span class="text-danger">{{ $errors->first('vet_university') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.vet_university_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pet_shelters">{{ trans('cruds.vetAnswer.fields.pet_shelters') }}</label>
                <input class="form-control {{ $errors->has('pet_shelters') ? 'is-invalid' : '' }}" type="text" name="pet_shelters" id="pet_shelters" value="{{ old('pet_shelters', '') }}">
                @if($errors->has('pet_shelters'))
                    <span class="text-danger">{{ $errors->first('pet_shelters') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.pet_shelters_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="department_id">{{ trans('cruds.vetAnswer.fields.department') }}</label>
                <select class="form-control select2 {{ $errors->has('department') ? 'is-invalid' : '' }}" name="department_id" id="department_id" required>
                    @foreach($departments as $id => $department)
                        <option value="{{ $id }}" {{ old('department_id') == $id ? 'selected' : '' }}>{{ $department }}</option>
                    @endforeach
                </select>
                @if($errors->has('department'))
                    <span class="text-danger">{{ $errors->first('department') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.department_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="city_id">{{ trans('cruds.vetAnswer.fields.city') }}</label>
                <select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id" required>
                    @foreach($cities as $id => $city)
                        <option value="{{ $id }}" {{ old('city_id') == $id ? 'selected' : '' }}>{{ $city }}</option>
                    @endforeach
                </select>
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.vetAnswer.fields.pet_nutrition_question') }}</label>
                @foreach(App\VetAnswer::PET_NUTRITION_QUESTION_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('pet_nutrition_question') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="pet_nutrition_question_{{ $key }}" name="pet_nutrition_question" value="{{ $key }}" {{ old('pet_nutrition_question', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="pet_nutrition_question_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('pet_nutrition_question'))
                    <span class="text-danger">{{ $errors->first('pet_nutrition_question') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.pet_nutrition_question_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="recomendations_applied">{{ trans('cruds.vetAnswer.fields.recomendations_applied') }}</label>
                <input class="form-control {{ $errors->has('recomendations_applied') ? 'is-invalid' : '' }}" type="number" name="recomendations_applied" id="recomendations_applied" value="{{ old('recomendations_applied', '1') }}" step="1">
                @if($errors->has('recomendations_applied'))
                    <span class="text-danger">{{ $errors->first('recomendations_applied') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.recomendations_applied_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.vetAnswer.fields.percent_apply_diet') }}</label>
                @foreach(App\VetAnswer::PERCENT_APPLY_DIET_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('percent_apply_diet') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="percent_apply_diet_{{ $key }}" name="percent_apply_diet" value="{{ $key }}" {{ old('percent_apply_diet', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="percent_apply_diet_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('percent_apply_diet'))
                    <span class="text-danger">{{ $errors->first('percent_apply_diet') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.percent_apply_diet_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="difficulty_change_food_owners">{{ trans('cruds.vetAnswer.fields.difficulty_change_food_owners') }}</label>
                <input class="form-control {{ $errors->has('difficulty_change_food_owners') ? 'is-invalid' : '' }}" type="text" name="difficulty_change_food_owners" id="difficulty_change_food_owners" value="{{ old('difficulty_change_food_owners', '') }}" required>
                @if($errors->has('difficulty_change_food_owners'))
                    <span class="text-danger">{{ $errors->first('difficulty_change_food_owners') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.difficulty_change_food_owners_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('obesity_5') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="obesity_5" value="0">
                    <input class="form-check-input" type="checkbox" name="obesity_5" id="obesity_5" value="1" {{ old('obesity_5', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="obesity_5">{{ trans('cruds.vetAnswer.fields.obesity_5') }}</label>
                </div>
                @if($errors->has('obesity_5'))
                    <span class="text-danger">{{ $errors->first('obesity_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.obesity_5_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('malnutrition_5') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="malnutrition_5" value="0">
                    <input class="form-check-input" type="checkbox" name="malnutrition_5" id="malnutrition_5" value="1" {{ old('malnutrition_5', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="malnutrition_5">{{ trans('cruds.vetAnswer.fields.malnutrition_5') }}</label>
                </div>
                @if($errors->has('malnutrition_5'))
                    <span class="text-danger">{{ $errors->first('malnutrition_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.malnutrition_5_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('allergies_5') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="allergies_5" value="0">
                    <input class="form-check-input" type="checkbox" name="allergies_5" id="allergies_5" value="1" {{ old('allergies_5', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="allergies_5">{{ trans('cruds.vetAnswer.fields.allergies_5') }}</label>
                </div>
                @if($errors->has('allergies_5'))
                    <span class="text-danger">{{ $errors->first('allergies_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.allergies_5_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('gastritis_5') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="gastritis_5" value="0">
                    <input class="form-check-input" type="checkbox" name="gastritis_5" id="gastritis_5" value="1" {{ old('gastritis_5', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="gastritis_5">{{ trans('cruds.vetAnswer.fields.gastritis_5') }}</label>
                </div>
                @if($errors->has('gastritis_5'))
                    <span class="text-danger">{{ $errors->first('gastritis_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.gastritis_5_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('diarrhea_5') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="diarrhea_5" value="0">
                    <input class="form-check-input" type="checkbox" name="diarrhea_5" id="diarrhea_5" value="1" {{ old('diarrhea_5', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="diarrhea_5">{{ trans('cruds.vetAnswer.fields.diarrhea_5') }}</label>
                </div>
                @if($errors->has('diarrhea_5'))
                    <span class="text-danger">{{ $errors->first('diarrhea_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.diarrhea_5_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('periodontal_5') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="periodontal_5" value="0">
                    <input class="form-check-input" type="checkbox" name="periodontal_5" id="periodontal_5" value="1" {{ old('periodontal_5', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="periodontal_5">{{ trans('cruds.vetAnswer.fields.periodontal_5') }}</label>
                </div>
                @if($errors->has('periodontal_5'))
                    <span class="text-danger">{{ $errors->first('periodontal_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.periodontal_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_disease_5">{{ trans('cruds.vetAnswer.fields.other_disease_5') }}</label>
                <input class="form-control {{ $errors->has('other_disease_5') ? 'is-invalid' : '' }}" type="text" name="other_disease_5" id="other_disease_5" value="{{ old('other_disease_5', '') }}">
                @if($errors->has('other_disease_5'))
                    <span class="text-danger">{{ $errors->first('other_disease_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.other_disease_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_5">{{ trans('cruds.vetAnswer.fields.other_5') }}</label>
                <input class="form-control {{ $errors->has('other_5') ? 'is-invalid' : '' }}" type="text" name="other_5" id="other_5" value="{{ old('other_5', '') }}">
                @if($errors->has('other_5'))
                    <span class="text-danger">{{ $errors->first('other_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.other_5_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('mix_food_6') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="mix_food_6" value="0">
                    <input class="form-check-input" type="checkbox" name="mix_food_6" id="mix_food_6" value="1" {{ old('mix_food_6', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="mix_food_6">{{ trans('cruds.vetAnswer.fields.mix_food_6') }}</label>
                </div>
                @if($errors->has('mix_food_6'))
                    <span class="text-danger">{{ $errors->first('mix_food_6') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.mix_food_6_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('food_outtime') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="food_outtime" value="0">
                    <input class="form-check-input" type="checkbox" name="food_outtime" id="food_outtime" value="1" {{ old('food_outtime', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="food_outtime">{{ trans('cruds.vetAnswer.fields.food_outtime') }}</label>
                </div>
                @if($errors->has('food_outtime'))
                    <span class="text-danger">{{ $errors->first('food_outtime') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.food_outtime_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('water_not_enough') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="water_not_enough" value="0">
                    <input class="form-check-input" type="checkbox" name="water_not_enough" id="water_not_enough" value="1" {{ old('water_not_enough', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="water_not_enough">{{ trans('cruds.vetAnswer.fields.water_not_enough') }}</label>
                </div>
                @if($errors->has('water_not_enough'))
                    <span class="text-danger">{{ $errors->first('water_not_enough') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.water_not_enough_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('quantities_control') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="quantities_control" value="0">
                    <input class="form-check-input" type="checkbox" name="quantities_control" id="quantities_control" value="1" {{ old('quantities_control', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="quantities_control">{{ trans('cruds.vetAnswer.fields.quantities_control') }}</label>
                </div>
                @if($errors->has('quantities_control'))
                    <span class="text-danger">{{ $errors->first('quantities_control') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.quantities_control_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('plate_higiene') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="plate_higiene" value="0">
                    <input class="form-check-input" type="checkbox" name="plate_higiene" id="plate_higiene" value="1" {{ old('plate_higiene', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="plate_higiene">{{ trans('cruds.vetAnswer.fields.plate_higiene') }}</label>
                </div>
                @if($errors->has('plate_higiene'))
                    <span class="text-danger">{{ $errors->first('plate_higiene') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.plate_higiene_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_bad_habit">{{ trans('cruds.vetAnswer.fields.other_bad_habit') }}</label>
                <input class="form-control {{ $errors->has('other_bad_habit') ? 'is-invalid' : '' }}" type="text" name="other_bad_habit" id="other_bad_habit" value="{{ old('other_bad_habit', '') }}">
                @if($errors->has('other_bad_habit'))
                    <span class="text-danger">{{ $errors->first('other_bad_habit') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.other_bad_habit_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_6">{{ trans('cruds.vetAnswer.fields.other_6') }}</label>
                <input class="form-control {{ $errors->has('other_6') ? 'is-invalid' : '' }}" type="text" name="other_6" id="other_6" value="{{ old('other_6', '') }}">
                @if($errors->has('other_6'))
                    <span class="text-danger">{{ $errors->first('other_6') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.other_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.vetAnswer.fields.food_type_recommendation') }}</label>
                @foreach(App\VetAnswer::FOOD_TYPE_RECOMMENDATION_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('food_type_recommendation') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="food_type_recommendation_{{ $key }}" name="food_type_recommendation" value="{{ $key }}" {{ old('food_type_recommendation', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="food_type_recommendation_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('food_type_recommendation'))
                    <span class="text-danger">{{ $errors->first('food_type_recommendation') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.food_type_recommendation_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.vetAnswer.fields.food_recomendation_concentrates') }}</label>
                @foreach(App\VetAnswer::FOOD_RECOMENDATION_CONCENTRATES_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('food_recomendation_concentrates') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="food_recomendation_concentrates_{{ $key }}" name="food_recomendation_concentrates" value="{{ $key }}" {{ old('food_recomendation_concentrates', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="food_recomendation_concentrates_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('food_recomendation_concentrates'))
                    <span class="text-danger">{{ $errors->first('food_recomendation_concentrates') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.food_recomendation_concentrates_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.vetAnswer.fields.percent_calories_concentrates') }}</label>
                @foreach(App\VetAnswer::PERCENT_CALORIES_CONCENTRATES_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('percent_calories_concentrates') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="percent_calories_concentrates_{{ $key }}" name="percent_calories_concentrates" value="{{ $key }}" {{ old('percent_calories_concentrates', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="percent_calories_concentrates_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('percent_calories_concentrates'))
                    <span class="text-danger">{{ $errors->first('percent_calories_concentrates') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.percent_calories_concentrates_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="country_best_food">{{ trans('cruds.vetAnswer.fields.country_best_food') }}</label>
                <textarea class="form-control {{ $errors->has('country_best_food') ? 'is-invalid' : '' }}" name="country_best_food" id="country_best_food" required>{{ old('country_best_food') }}</textarea>
                @if($errors->has('country_best_food'))
                    <span class="text-danger">{{ $errors->first('country_best_food') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.country_best_food_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.vetAnswer.fields.if_us_best_food') }}</label>
                @foreach(App\VetAnswer::IF_US_BEST_FOOD_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('if_us_best_food') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="if_us_best_food_{{ $key }}" name="if_us_best_food" value="{{ $key }}" {{ old('if_us_best_food', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="if_us_best_food_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('if_us_best_food'))
                    <span class="text-danger">{{ $errors->first('if_us_best_food') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.if_us_best_food_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_11">{{ trans('cruds.vetAnswer.fields.other_11') }}</label>
                <input class="form-control {{ $errors->has('other_11') ? 'is-invalid' : '' }}" type="text" name="other_11" id="other_11" value="{{ old('other_11', '') }}">
                @if($errors->has('other_11'))
                    <span class="text-danger">{{ $errors->first('other_11') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.other_11_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="not_recommended_food">{{ trans('cruds.vetAnswer.fields.not_recommended_food') }}</label>
                <input class="form-control {{ $errors->has('not_recommended_food') ? 'is-invalid' : '' }}" type="text" name="not_recommended_food" id="not_recommended_food" value="{{ old('not_recommended_food', '') }}" required>
                @if($errors->has('not_recommended_food'))
                    <span class="text-danger">{{ $errors->first('not_recommended_food') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.not_recommended_food_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.vetAnswer.fields.frecuency_education') }}</label>
                @foreach(App\VetAnswer::FRECUENCY_EDUCATION_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('frecuency_education') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="frecuency_education_{{ $key }}" name="frecuency_education" value="{{ $key }}" {{ old('frecuency_education', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="frecuency_education_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('frecuency_education'))
                    <span class="text-danger">{{ $errors->first('frecuency_education') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.frecuency_education_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.vetAnswer.fields.heard_about_pfi') }}</label>
                @foreach(App\VetAnswer::HEARD_ABOUT_PFI_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('heard_about_pfi') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="heard_about_pfi_{{ $key }}" name="heard_about_pfi" value="{{ $key }}" {{ old('heard_about_pfi', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="heard_about_pfi_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('heard_about_pfi'))
                    <span class="text-danger">{{ $errors->first('heard_about_pfi') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.heard_about_pfi_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ip">{{ trans('cruds.vetAnswer.fields.ip') }}</label>
                <input class="form-control {{ $errors->has('ip') ? 'is-invalid' : '' }}" type="text" name="ip" id="ip" value="{{ old('ip', '') }}">
                @if($errors->has('ip'))
                    <span class="text-danger">{{ $errors->first('ip') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vetAnswer.fields.ip_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection