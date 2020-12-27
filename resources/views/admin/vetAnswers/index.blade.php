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
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-VetAnswer">
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
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('vet_answer_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.vet-answers.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.vet-answers.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'vet_clinic', name: 'vet_clinic' },
{ data: 'vet_university', name: 'vet_university' },
{ data: 'pet_shelters', name: 'pet_shelters' },
{ data: 'department_name', name: 'department.name' },
{ data: 'city_name', name: 'city.name' },
{ data: 'pet_nutrition_question', name: 'pet_nutrition_question' },
{ data: 'recomendations_applied', name: 'recomendations_applied' },
{ data: 'percent_apply_diet', name: 'percent_apply_diet' },
{ data: 'difficulty_change_food_owners', name: 'difficulty_change_food_owners' },
{ data: 'obesity_5', name: 'obesity_5' },
{ data: 'malnutrition_5', name: 'malnutrition_5' },
{ data: 'allergies_5', name: 'allergies_5' },
{ data: 'gastritis_5', name: 'gastritis_5' },
{ data: 'diarrhea_5', name: 'diarrhea_5' },
{ data: 'periodontal_5', name: 'periodontal_5' },
{ data: 'other_disease_5', name: 'other_disease_5' },
{ data: 'other_5', name: 'other_5' },
{ data: 'mix_food_6', name: 'mix_food_6' },
{ data: 'food_outtime', name: 'food_outtime' },
{ data: 'water_not_enough', name: 'water_not_enough' },
{ data: 'quantities_control', name: 'quantities_control' },
{ data: 'plate_higiene', name: 'plate_higiene' },
{ data: 'other_bad_habit', name: 'other_bad_habit' },
{ data: 'other_6', name: 'other_6' },
{ data: 'food_type_recommendation', name: 'food_type_recommendation' },
{ data: 'food_recomendation_concentrates', name: 'food_recomendation_concentrates' },
{ data: 'percent_calories_concentrates', name: 'percent_calories_concentrates' },
{ data: 'country_best_food', name: 'country_best_food' },
{ data: 'if_us_best_food', name: 'if_us_best_food' },
{ data: 'other_11', name: 'other_11' },
{ data: 'not_recommended_food', name: 'not_recommended_food' },
{ data: 'frecuency_education', name: 'frecuency_education' },
{ data: 'heard_about_pfi', name: 'heard_about_pfi' },
{ data: 'ip', name: 'ip' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  };
  let table = $('.datatable-VetAnswer').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection