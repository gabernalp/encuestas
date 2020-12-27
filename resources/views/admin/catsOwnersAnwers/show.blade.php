@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.catsOwnersAnwer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cats-owners-anwers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.id') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.name') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.email') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.department') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->department->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.city') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->city->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.cat_appear') }}
                        </th>
                        <td>
                            {{ App\CatsOwnersAnwer::CAT_APPEAR_RADIO[$catsOwnersAnwer->cat_appear] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.other_1') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->other_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.cat_consideration') }}
                        </th>
                        <td>
                            {{ App\CatsOwnersAnwer::CAT_CONSIDERATION_RADIO[$catsOwnersAnwer->cat_consideration] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.other_2') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->other_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.cat_food_advice') }}
                        </th>
                        <td>
                            {{ App\CatsOwnersAnwer::CAT_FOOD_ADVICE_RADIO[$catsOwnersAnwer->cat_food_advice] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.cat_food_choose') }}
                        </th>
                        <td>
                            {{ App\CatsOwnersAnwer::CAT_FOOD_CHOOSE_RADIO[$catsOwnersAnwer->cat_food_choose] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.other_4') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->other_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.cat_diff_nutrition') }}
                        </th>
                        <td>
                            {{ App\CatsOwnersAnwer::CAT_DIFF_NUTRITION_RADIO[$catsOwnersAnwer->cat_diff_nutrition] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.cat_diet_owner') }}
                        </th>
                        <td>
                            {{ App\CatsOwnersAnwer::CAT_DIET_OWNER_RADIO[$catsOwnersAnwer->cat_diet_owner] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.cat_food_type') }}
                        </th>
                        <td>
                            {{ App\CatsOwnersAnwer::CAT_FOOD_TYPE_RADIO[$catsOwnersAnwer->cat_food_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.diamond_naturals_8') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->diamond_naturals_8 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.purina_8') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->purina_8 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.mars_8') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->mars_8 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.whiskas_8') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->whiskas_8 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.other_8') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->other_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.cat_percent_concentrate') }}
                        </th>
                        <td>
                            {{ App\CatsOwnersAnwer::CAT_PERCENT_CONCENTRATE_RADIO[$catsOwnersAnwer->cat_percent_concentrate] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.cat_candies') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->cat_candies }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.cat_change_food') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->cat_change_food }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.general_consultation_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->general_consultation_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.dermatological_disease_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->dermatological_disease_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.digestive_disease_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->digestive_disease_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.periodontal_disease_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->periodontal_disease_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.neuro_problems_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->neuro_problems_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.metabolic_disease_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->metabolic_disease_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.orthopedic_problems_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->orthopedic_problems_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.emergency_case_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->emergency_case_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.other_12') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->other_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.cat_actual_disease') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->cat_actual_disease }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.avoid_obesity_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->avoid_obesity_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.read_food_tags_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->read_food_tags_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.healthy_snacks_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->healthy_snacks_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.diets_switch_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->diets_switch_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.food_by_grow_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->food_by_grow_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.food_by_physical_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->food_by_physical_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.more_info_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->more_info_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.other_14') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->other_14 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.heard_about_pfi') }}
                        </th>
                        <td>
                            {{ App\CatsOwnersAnwer::HEARD_ABOUT_PFI_RADIO[$catsOwnersAnwer->heard_about_pfi] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.catsOwnersAnwer.fields.ip') }}
                        </th>
                        <td>
                            {{ $catsOwnersAnwer->ip }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cats-owners-anwers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection