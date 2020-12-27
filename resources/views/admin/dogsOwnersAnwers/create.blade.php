@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.dogsOwnersAnwer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.dogs-owners-anwers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.dogsOwnersAnwer.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.dogsOwnersAnwer.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}" required>
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="department_id">{{ trans('cruds.dogsOwnersAnwer.fields.department') }}</label>
                <select class="form-control select2 {{ $errors->has('department') ? 'is-invalid' : '' }}" name="department_id" id="department_id" required>
                    @foreach($departments as $id => $department)
                        <option value="{{ $id }}" {{ old('department_id') == $id ? 'selected' : '' }}>{{ $department }}</option>
                    @endforeach
                </select>
                @if($errors->has('department'))
                    <span class="text-danger">{{ $errors->first('department') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.department_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="city_id">{{ trans('cruds.dogsOwnersAnwer.fields.city') }}</label>
                <select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id" required>
                    @foreach($cities as $id => $city)
                        <option value="{{ $id }}" {{ old('city_id') == $id ? 'selected' : '' }}>{{ $city }}</option>
                    @endforeach
                </select>
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.dogsOwnersAnwer.fields.dog_appear') }}</label>
                @foreach(App\DogsOwnersAnwer::DOG_APPEAR_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('dog_appear') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="dog_appear_{{ $key }}" name="dog_appear" value="{{ $key }}" {{ old('dog_appear', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="dog_appear_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('dog_appear'))
                    <span class="text-danger">{{ $errors->first('dog_appear') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.dog_appear_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_1">{{ trans('cruds.dogsOwnersAnwer.fields.other_1') }}</label>
                <input class="form-control {{ $errors->has('other_1') ? 'is-invalid' : '' }}" type="text" name="other_1" id="other_1" value="{{ old('other_1', '') }}">
                @if($errors->has('other_1'))
                    <span class="text-danger">{{ $errors->first('other_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.other_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.dogsOwnersAnwer.fields.dog_consideration') }}</label>
                @foreach(App\DogsOwnersAnwer::DOG_CONSIDERATION_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('dog_consideration') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="dog_consideration_{{ $key }}" name="dog_consideration" value="{{ $key }}" {{ old('dog_consideration', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="dog_consideration_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('dog_consideration'))
                    <span class="text-danger">{{ $errors->first('dog_consideration') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.dog_consideration_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_2">{{ trans('cruds.dogsOwnersAnwer.fields.other_2') }}</label>
                <input class="form-control {{ $errors->has('other_2') ? 'is-invalid' : '' }}" type="text" name="other_2" id="other_2" value="{{ old('other_2', '') }}">
                @if($errors->has('other_2'))
                    <span class="text-danger">{{ $errors->first('other_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.other_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.dogsOwnersAnwer.fields.dog_food_advice') }}</label>
                @foreach(App\DogsOwnersAnwer::DOG_FOOD_ADVICE_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('dog_food_advice') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="dog_food_advice_{{ $key }}" name="dog_food_advice" value="{{ $key }}" {{ old('dog_food_advice', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="dog_food_advice_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('dog_food_advice'))
                    <span class="text-danger">{{ $errors->first('dog_food_advice') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.dog_food_advice_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.dogsOwnersAnwer.fields.dog_food_choose') }}</label>
                @foreach(App\DogsOwnersAnwer::DOG_FOOD_CHOOSE_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('dog_food_choose') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="dog_food_choose_{{ $key }}" name="dog_food_choose" value="{{ $key }}" {{ old('dog_food_choose', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="dog_food_choose_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('dog_food_choose'))
                    <span class="text-danger">{{ $errors->first('dog_food_choose') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.dog_food_choose_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_4">{{ trans('cruds.dogsOwnersAnwer.fields.other_4') }}</label>
                <input class="form-control {{ $errors->has('other_4') ? 'is-invalid' : '' }}" type="text" name="other_4" id="other_4" value="{{ old('other_4', '') }}">
                @if($errors->has('other_4'))
                    <span class="text-danger">{{ $errors->first('other_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.other_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.dogsOwnersAnwer.fields.dog_diff_nutrition') }}</label>
                @foreach(App\DogsOwnersAnwer::DOG_DIFF_NUTRITION_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('dog_diff_nutrition') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="dog_diff_nutrition_{{ $key }}" name="dog_diff_nutrition" value="{{ $key }}" {{ old('dog_diff_nutrition', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="dog_diff_nutrition_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('dog_diff_nutrition'))
                    <span class="text-danger">{{ $errors->first('dog_diff_nutrition') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.dog_diff_nutrition_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.dogsOwnersAnwer.fields.dog_diet_owner') }}</label>
                @foreach(App\DogsOwnersAnwer::DOG_DIET_OWNER_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('dog_diet_owner') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="dog_diet_owner_{{ $key }}" name="dog_diet_owner" value="{{ $key }}" {{ old('dog_diet_owner', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="dog_diet_owner_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('dog_diet_owner'))
                    <span class="text-danger">{{ $errors->first('dog_diet_owner') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.dog_diet_owner_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.dogsOwnersAnwer.fields.dog_food_type') }}</label>
                @foreach(App\DogsOwnersAnwer::DOG_FOOD_TYPE_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('dog_food_type') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="dog_food_type_{{ $key }}" name="dog_food_type" value="{{ $key }}" {{ old('dog_food_type', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="dog_food_type_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('dog_food_type'))
                    <span class="text-danger">{{ $errors->first('dog_food_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.dog_food_type_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('diamond_naturals_8') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="diamond_naturals_8" value="0">
                    <input class="form-check-input" type="checkbox" name="diamond_naturals_8" id="diamond_naturals_8" value="1" {{ old('diamond_naturals_8', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="diamond_naturals_8">{{ trans('cruds.dogsOwnersAnwer.fields.diamond_naturals_8') }}</label>
                </div>
                @if($errors->has('diamond_naturals_8'))
                    <span class="text-danger">{{ $errors->first('diamond_naturals_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.diamond_naturals_8_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('purina_8') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="purina_8" value="0">
                    <input class="form-check-input" type="checkbox" name="purina_8" id="purina_8" value="1" {{ old('purina_8', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="purina_8">{{ trans('cruds.dogsOwnersAnwer.fields.purina_8') }}</label>
                </div>
                @if($errors->has('purina_8'))
                    <span class="text-danger">{{ $errors->first('purina_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.purina_8_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('hills_8') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="hills_8" value="0">
                    <input class="form-check-input" type="checkbox" name="hills_8" id="hills_8" value="1" {{ old('hills_8', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="hills_8">{{ trans('cruds.dogsOwnersAnwer.fields.hills_8') }}</label>
                </div>
                @if($errors->has('hills_8'))
                    <span class="text-danger">{{ $errors->first('hills_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.hills_8_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('pedigree_8') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="pedigree_8" value="0">
                    <input class="form-check-input" type="checkbox" name="pedigree_8" id="pedigree_8" value="1" {{ old('pedigree_8', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="pedigree_8">{{ trans('cruds.dogsOwnersAnwer.fields.pedigree_8') }}</label>
                </div>
                @if($errors->has('pedigree_8'))
                    <span class="text-danger">{{ $errors->first('pedigree_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.pedigree_8_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('royal_canin_8') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="royal_canin_8" value="0">
                    <input class="form-check-input" type="checkbox" name="royal_canin_8" id="royal_canin_8" value="1" {{ old('royal_canin_8', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="royal_canin_8">{{ trans('cruds.dogsOwnersAnwer.fields.royal_canin_8') }}</label>
                </div>
                @if($errors->has('royal_canin_8'))
                    <span class="text-danger">{{ $errors->first('royal_canin_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.royal_canin_8_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('mars_8') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="mars_8" value="0">
                    <input class="form-check-input" type="checkbox" name="mars_8" id="mars_8" value="1" {{ old('mars_8', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="mars_8">{{ trans('cruds.dogsOwnersAnwer.fields.mars_8') }}</label>
                </div>
                @if($errors->has('mars_8'))
                    <span class="text-danger">{{ $errors->first('mars_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.mars_8_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_8">{{ trans('cruds.dogsOwnersAnwer.fields.other_8') }}</label>
                <input class="form-control {{ $errors->has('other_8') ? 'is-invalid' : '' }}" type="text" name="other_8" id="other_8" value="{{ old('other_8', '') }}">
                @if($errors->has('other_8'))
                    <span class="text-danger">{{ $errors->first('other_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.other_8_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.dogsOwnersAnwer.fields.dog_percent_concentrate') }}</label>
                @foreach(App\DogsOwnersAnwer::DOG_PERCENT_CONCENTRATE_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('dog_percent_concentrate') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="dog_percent_concentrate_{{ $key }}" name="dog_percent_concentrate" value="{{ $key }}" {{ old('dog_percent_concentrate', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="dog_percent_concentrate_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('dog_percent_concentrate'))
                    <span class="text-danger">{{ $errors->first('dog_percent_concentrate') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.dog_percent_concentrate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dog_candies">{{ trans('cruds.dogsOwnersAnwer.fields.dog_candies') }}</label>
                <input class="form-control {{ $errors->has('dog_candies') ? 'is-invalid' : '' }}" type="text" name="dog_candies" id="dog_candies" value="{{ old('dog_candies', '') }}">
                @if($errors->has('dog_candies'))
                    <span class="text-danger">{{ $errors->first('dog_candies') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.dog_candies_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dog_change_food">{{ trans('cruds.dogsOwnersAnwer.fields.dog_change_food') }}</label>
                <input class="form-control {{ $errors->has('dog_change_food') ? 'is-invalid' : '' }}" type="text" name="dog_change_food" id="dog_change_food" value="{{ old('dog_change_food', '') }}" required>
                @if($errors->has('dog_change_food'))
                    <span class="text-danger">{{ $errors->first('dog_change_food') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.dog_change_food_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('general_consultation_12') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="general_consultation_12" value="0">
                    <input class="form-check-input" type="checkbox" name="general_consultation_12" id="general_consultation_12" value="1" {{ old('general_consultation_12', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="general_consultation_12">{{ trans('cruds.dogsOwnersAnwer.fields.general_consultation_12') }}</label>
                </div>
                @if($errors->has('general_consultation_12'))
                    <span class="text-danger">{{ $errors->first('general_consultation_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.general_consultation_12_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('dermatological_disease_12') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="dermatological_disease_12" value="0">
                    <input class="form-check-input" type="checkbox" name="dermatological_disease_12" id="dermatological_disease_12" value="1" {{ old('dermatological_disease_12', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="dermatological_disease_12">{{ trans('cruds.dogsOwnersAnwer.fields.dermatological_disease_12') }}</label>
                </div>
                @if($errors->has('dermatological_disease_12'))
                    <span class="text-danger">{{ $errors->first('dermatological_disease_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.dermatological_disease_12_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('digestive_disease_12') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="digestive_disease_12" value="0">
                    <input class="form-check-input" type="checkbox" name="digestive_disease_12" id="digestive_disease_12" value="1" {{ old('digestive_disease_12', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="digestive_disease_12">{{ trans('cruds.dogsOwnersAnwer.fields.digestive_disease_12') }}</label>
                </div>
                @if($errors->has('digestive_disease_12'))
                    <span class="text-danger">{{ $errors->first('digestive_disease_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.digestive_disease_12_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('periodontal_disease_12') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="periodontal_disease_12" value="0">
                    <input class="form-check-input" type="checkbox" name="periodontal_disease_12" id="periodontal_disease_12" value="1" {{ old('periodontal_disease_12', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="periodontal_disease_12">{{ trans('cruds.dogsOwnersAnwer.fields.periodontal_disease_12') }}</label>
                </div>
                @if($errors->has('periodontal_disease_12'))
                    <span class="text-danger">{{ $errors->first('periodontal_disease_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.periodontal_disease_12_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('neuro_problems_12') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="neuro_problems_12" value="0">
                    <input class="form-check-input" type="checkbox" name="neuro_problems_12" id="neuro_problems_12" value="1" {{ old('neuro_problems_12', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="neuro_problems_12">{{ trans('cruds.dogsOwnersAnwer.fields.neuro_problems_12') }}</label>
                </div>
                @if($errors->has('neuro_problems_12'))
                    <span class="text-danger">{{ $errors->first('neuro_problems_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.neuro_problems_12_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('metabolic_disease_12') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="metabolic_disease_12" value="0">
                    <input class="form-check-input" type="checkbox" name="metabolic_disease_12" id="metabolic_disease_12" value="1" {{ old('metabolic_disease_12', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="metabolic_disease_12">{{ trans('cruds.dogsOwnersAnwer.fields.metabolic_disease_12') }}</label>
                </div>
                @if($errors->has('metabolic_disease_12'))
                    <span class="text-danger">{{ $errors->first('metabolic_disease_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.metabolic_disease_12_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('orthopedic_problems_12') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="orthopedic_problems_12" value="0">
                    <input class="form-check-input" type="checkbox" name="orthopedic_problems_12" id="orthopedic_problems_12" value="1" {{ old('orthopedic_problems_12', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="orthopedic_problems_12">{{ trans('cruds.dogsOwnersAnwer.fields.orthopedic_problems_12') }}</label>
                </div>
                @if($errors->has('orthopedic_problems_12'))
                    <span class="text-danger">{{ $errors->first('orthopedic_problems_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.orthopedic_problems_12_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('emergency_case_12') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="emergency_case_12" value="0">
                    <input class="form-check-input" type="checkbox" name="emergency_case_12" id="emergency_case_12" value="1" {{ old('emergency_case_12', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="emergency_case_12">{{ trans('cruds.dogsOwnersAnwer.fields.emergency_case_12') }}</label>
                </div>
                @if($errors->has('emergency_case_12'))
                    <span class="text-danger">{{ $errors->first('emergency_case_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.emergency_case_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_12">{{ trans('cruds.dogsOwnersAnwer.fields.other_12') }}</label>
                <input class="form-control {{ $errors->has('other_12') ? 'is-invalid' : '' }}" type="text" name="other_12" id="other_12" value="{{ old('other_12', '') }}">
                @if($errors->has('other_12'))
                    <span class="text-danger">{{ $errors->first('other_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.other_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dog_actual_disease">{{ trans('cruds.dogsOwnersAnwer.fields.dog_actual_disease') }}</label>
                <textarea class="form-control {{ $errors->has('dog_actual_disease') ? 'is-invalid' : '' }}" name="dog_actual_disease" id="dog_actual_disease">{{ old('dog_actual_disease') }}</textarea>
                @if($errors->has('dog_actual_disease'))
                    <span class="text-danger">{{ $errors->first('dog_actual_disease') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.dog_actual_disease_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('avoid_obesity_14') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="avoid_obesity_14" value="0">
                    <input class="form-check-input" type="checkbox" name="avoid_obesity_14" id="avoid_obesity_14" value="1" {{ old('avoid_obesity_14', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="avoid_obesity_14">{{ trans('cruds.dogsOwnersAnwer.fields.avoid_obesity_14') }}</label>
                </div>
                @if($errors->has('avoid_obesity_14'))
                    <span class="text-danger">{{ $errors->first('avoid_obesity_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.avoid_obesity_14_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('read_food_tags_14') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="read_food_tags_14" value="0">
                    <input class="form-check-input" type="checkbox" name="read_food_tags_14" id="read_food_tags_14" value="1" {{ old('read_food_tags_14', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="read_food_tags_14">{{ trans('cruds.dogsOwnersAnwer.fields.read_food_tags_14') }}</label>
                </div>
                @if($errors->has('read_food_tags_14'))
                    <span class="text-danger">{{ $errors->first('read_food_tags_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.read_food_tags_14_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('healthy_snacks_14') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="healthy_snacks_14" value="0">
                    <input class="form-check-input" type="checkbox" name="healthy_snacks_14" id="healthy_snacks_14" value="1" {{ old('healthy_snacks_14', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="healthy_snacks_14">{{ trans('cruds.dogsOwnersAnwer.fields.healthy_snacks_14') }}</label>
                </div>
                @if($errors->has('healthy_snacks_14'))
                    <span class="text-danger">{{ $errors->first('healthy_snacks_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.healthy_snacks_14_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('diets_switch_14') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="diets_switch_14" value="0">
                    <input class="form-check-input" type="checkbox" name="diets_switch_14" id="diets_switch_14" value="1" {{ old('diets_switch_14', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="diets_switch_14">{{ trans('cruds.dogsOwnersAnwer.fields.diets_switch_14') }}</label>
                </div>
                @if($errors->has('diets_switch_14'))
                    <span class="text-danger">{{ $errors->first('diets_switch_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.diets_switch_14_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('food_by_grow_14') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="food_by_grow_14" value="0">
                    <input class="form-check-input" type="checkbox" name="food_by_grow_14" id="food_by_grow_14" value="1" {{ old('food_by_grow_14', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="food_by_grow_14">{{ trans('cruds.dogsOwnersAnwer.fields.food_by_grow_14') }}</label>
                </div>
                @if($errors->has('food_by_grow_14'))
                    <span class="text-danger">{{ $errors->first('food_by_grow_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.food_by_grow_14_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('food_by_physical_14') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="food_by_physical_14" value="0">
                    <input class="form-check-input" type="checkbox" name="food_by_physical_14" id="food_by_physical_14" value="1" {{ old('food_by_physical_14', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="food_by_physical_14">{{ trans('cruds.dogsOwnersAnwer.fields.food_by_physical_14') }}</label>
                </div>
                @if($errors->has('food_by_physical_14'))
                    <span class="text-danger">{{ $errors->first('food_by_physical_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.food_by_physical_14_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('more_info_14') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="more_info_14" value="0">
                    <input class="form-check-input" type="checkbox" name="more_info_14" id="more_info_14" value="1" {{ old('more_info_14', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="more_info_14">{{ trans('cruds.dogsOwnersAnwer.fields.more_info_14') }}</label>
                </div>
                @if($errors->has('more_info_14'))
                    <span class="text-danger">{{ $errors->first('more_info_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.more_info_14_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_14">{{ trans('cruds.dogsOwnersAnwer.fields.other_14') }}</label>
                <input class="form-control {{ $errors->has('other_14') ? 'is-invalid' : '' }}" type="text" name="other_14" id="other_14" value="{{ old('other_14', '') }}">
                @if($errors->has('other_14'))
                    <span class="text-danger">{{ $errors->first('other_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.other_14_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.dogsOwnersAnwer.fields.heard_about_pfi') }}</label>
                @foreach(App\DogsOwnersAnwer::HEARD_ABOUT_PFI_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('heard_about_pfi') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="heard_about_pfi_{{ $key }}" name="heard_about_pfi" value="{{ $key }}" {{ old('heard_about_pfi', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="heard_about_pfi_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('heard_about_pfi'))
                    <span class="text-danger">{{ $errors->first('heard_about_pfi') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.heard_about_pfi_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ip">{{ trans('cruds.dogsOwnersAnwer.fields.ip') }}</label>
                <input class="form-control {{ $errors->has('ip') ? 'is-invalid' : '' }}" type="text" name="ip" id="ip" value="{{ old('ip', '') }}">
                @if($errors->has('ip'))
                    <span class="text-danger">{{ $errors->first('ip') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.dogsOwnersAnwer.fields.ip_helper') }}</span>
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