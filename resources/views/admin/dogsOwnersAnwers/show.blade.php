@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.dogsOwnersAnwer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.dogs-owners-anwers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.id') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.name') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.email') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.department') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->department->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.city') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->city->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.dog_appear') }}
                        </th>
                        <td>
                            {{ App\DogsOwnersAnwer::DOG_APPEAR_RADIO[$dogsOwnersAnwer->dog_appear] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.other_1') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->other_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.dog_consideration') }}
                        </th>
                        <td>
                            {{ App\DogsOwnersAnwer::DOG_CONSIDERATION_RADIO[$dogsOwnersAnwer->dog_consideration] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.other_2') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->other_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.dog_food_advice') }}
                        </th>
                        <td>
                            {{ App\DogsOwnersAnwer::DOG_FOOD_ADVICE_RADIO[$dogsOwnersAnwer->dog_food_advice] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.dog_food_choose') }}
                        </th>
                        <td>
                            {{ App\DogsOwnersAnwer::DOG_FOOD_CHOOSE_RADIO[$dogsOwnersAnwer->dog_food_choose] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.other_4') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->other_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.dog_diff_nutrition') }}
                        </th>
                        <td>
                            {{ App\DogsOwnersAnwer::DOG_DIFF_NUTRITION_RADIO[$dogsOwnersAnwer->dog_diff_nutrition] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.dog_diet_owner') }}
                        </th>
                        <td>
                            {{ App\DogsOwnersAnwer::DOG_DIET_OWNER_RADIO[$dogsOwnersAnwer->dog_diet_owner] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.dog_food_type') }}
                        </th>
                        <td>
                            {{ App\DogsOwnersAnwer::DOG_FOOD_TYPE_RADIO[$dogsOwnersAnwer->dog_food_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.diamond_naturals_8') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->diamond_naturals_8 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.purina_8') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->purina_8 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.hills_8') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->hills_8 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.pedigree_8') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->pedigree_8 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.royal_canin_8') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->royal_canin_8 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.mars_8') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->mars_8 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.other_8') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->other_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.dog_percent_concentrate') }}
                        </th>
                        <td>
                            {{ App\DogsOwnersAnwer::DOG_PERCENT_CONCENTRATE_RADIO[$dogsOwnersAnwer->dog_percent_concentrate] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.dog_candies') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->dog_candies }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.dog_change_food') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->dog_change_food }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.general_consultation_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->general_consultation_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.dermatological_disease_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->dermatological_disease_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.digestive_disease_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->digestive_disease_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.periodontal_disease_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->periodontal_disease_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.neuro_problems_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->neuro_problems_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.metabolic_disease_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->metabolic_disease_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.orthopedic_problems_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->orthopedic_problems_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.emergency_case_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->emergency_case_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.other_12') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->other_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.dog_actual_disease') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->dog_actual_disease }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.avoid_obesity_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->avoid_obesity_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.read_food_tags_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->read_food_tags_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.healthy_snacks_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->healthy_snacks_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.diets_switch_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->diets_switch_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.food_by_grow_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->food_by_grow_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.food_by_physical_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->food_by_physical_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.more_info_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->more_info_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.other_14') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->other_14 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.heard_about_pfi') }}
                        </th>
                        <td>
                            {{ App\DogsOwnersAnwer::HEARD_ABOUT_PFI_RADIO[$dogsOwnersAnwer->heard_about_pfi] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dogsOwnersAnwer.fields.ip') }}
                        </th>
                        <td>
                            {{ $dogsOwnersAnwer->ip }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.dogs-owners-anwers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection