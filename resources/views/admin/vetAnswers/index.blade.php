@extends('layouts.admin')
@section('content')
@can('vet_answer_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.vet-answers.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.vetAnswer.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.vetAnswer.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-VetAnswer">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.vet_clinic') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.vet_university') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.pet_shelters') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.department') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.pet_nutrition_question') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.recomendations_applied') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.percent_apply_diet') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.difficulty_change_food_owners') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.obesity_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.malnutrition_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.allergies_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.gastritis_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.diarrhea_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.periodontal_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.other_disease_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.other_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.mix_food_6') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.food_outtime') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.water_not_enough') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.quantities_control') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.plate_higiene') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.other_bad_habit') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.other_6') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.food_type_recommendation') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.food_recomendation_concentrates') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.percent_calories_concentrates') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.country_best_food') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.if_us_best_food') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.other_11') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.not_recommended_food') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.frecuency_education') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.heard_about_pfi') }}
                        </th>
                        <th>
                            {{ trans('cruds.vetAnswer.fields.ip') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vetAnswers as $key => $vetAnswer)
                        <tr data-entry-id="{{ $vetAnswer->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $vetAnswer->id ?? '' }}
                            </td>
                            <td>
                                {{ $vetAnswer->name ?? '' }}
                            </td>
                            <td>
                                {{ $vetAnswer->vet_clinic ?? '' }}
                            </td>
                            <td>
                                {{ $vetAnswer->vet_university ?? '' }}
                            </td>
                            <td>
                                {{ $vetAnswer->pet_shelters ?? '' }}
                            </td>
                            <td>
                                {{ $vetAnswer->department->name ?? '' }}
                            </td>
                            <td>
                                {{ $vetAnswer->city->name ?? '' }}
                            </td>
                            <td>
                                {{ App\VetAnswer::PET_NUTRITION_QUESTION_RADIO[$vetAnswer->pet_nutrition_question] ?? '' }}
                            </td>
                            <td>
                                {{ $vetAnswer->recomendations_applied ?? '' }}
                            </td>
                            <td>
                                {{ App\VetAnswer::PERCENT_APPLY_DIET_RADIO[$vetAnswer->percent_apply_diet] ?? '' }}
                            </td>
                            <td>
                                {{ $vetAnswer->difficulty_change_food_owners ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $vetAnswer->obesity_5 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $vetAnswer->obesity_5 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $vetAnswer->malnutrition_5 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $vetAnswer->malnutrition_5 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $vetAnswer->allergies_5 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $vetAnswer->allergies_5 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $vetAnswer->gastritis_5 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $vetAnswer->gastritis_5 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $vetAnswer->diarrhea_5 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $vetAnswer->diarrhea_5 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $vetAnswer->periodontal_5 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $vetAnswer->periodontal_5 ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $vetAnswer->other_disease_5 ?? '' }}
                            </td>
                            <td>
                                {{ $vetAnswer->other_5 ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $vetAnswer->mix_food_6 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $vetAnswer->mix_food_6 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $vetAnswer->food_outtime ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $vetAnswer->food_outtime ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $vetAnswer->water_not_enough ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $vetAnswer->water_not_enough ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $vetAnswer->quantities_control ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $vetAnswer->quantities_control ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $vetAnswer->plate_higiene ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $vetAnswer->plate_higiene ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $vetAnswer->other_bad_habit ?? '' }}
                            </td>
                            <td>
                                {{ $vetAnswer->other_6 ?? '' }}
                            </td>
                            <td>
                                {{ App\VetAnswer::FOOD_TYPE_RECOMMENDATION_RADIO[$vetAnswer->food_type_recommendation] ?? '' }}
                            </td>
                            <td>
                                {{ App\VetAnswer::FOOD_RECOMENDATION_CONCENTRATES_RADIO[$vetAnswer->food_recomendation_concentrates] ?? '' }}
                            </td>
                            <td>
                                {{ App\VetAnswer::PERCENT_CALORIES_CONCENTRATES_RADIO[$vetAnswer->percent_calories_concentrates] ?? '' }}
                            </td>
                            <td>
                                {{ $vetAnswer->country_best_food ?? '' }}
                            </td>
                            <td>
                                {{ App\VetAnswer::IF_US_BEST_FOOD_RADIO[$vetAnswer->if_us_best_food] ?? '' }}
                            </td>
                            <td>
                                {{ $vetAnswer->other_11 ?? '' }}
                            </td>
                            <td>
                                {{ $vetAnswer->not_recommended_food ?? '' }}
                            </td>
                            <td>
                                {{ App\VetAnswer::FRECUENCY_EDUCATION_RADIO[$vetAnswer->frecuency_education] ?? '' }}
                            </td>
                            <td>
                                {{ App\VetAnswer::HEARD_ABOUT_PFI_RADIO[$vetAnswer->heard_about_pfi] ?? '' }}
                            </td>
                            <td>
                                {{ $vetAnswer->ip ?? '' }}
                            </td>
                            <td>
                                @can('vet_answer_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.vet-answers.show', $vetAnswer->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('vet_answer_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.vet-answers.edit', $vetAnswer->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('vet_answer_delete')
                                    <form action="{{ route('admin.vet-answers.destroy', $vetAnswer->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('vet_answer_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.vet-answers.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  });
  let table = $('.datatable-VetAnswer:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection