@extends('layouts.admin')
@section('content')
@can('dogs_owners_anwer_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.dogs-owners-anwers.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.dogsOwnersAnwer.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.dogsOwnersAnwer.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-DogsOwnersAnwer">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.email') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.department') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.city') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.dog_appear') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.other_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.dog_consideration') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.other_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.dog_food_advice') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.dog_food_choose') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.other_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.dog_diff_nutrition') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.dog_diet_owner') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.dog_food_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.diamond_naturals_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.purina_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.hills_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.pedigree_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.royal_canin_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.mars_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.other_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.dog_percent_concentrate') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.dog_candies') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.dog_change_food') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.general_consultation_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.dermatological_disease_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.digestive_disease_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.periodontal_disease_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.neuro_problems_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.metabolic_disease_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.orthopedic_problems_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.emergency_case_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.other_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.dog_actual_disease') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.avoid_obesity_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.read_food_tags_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.healthy_snacks_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.diets_switch_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.food_by_grow_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.food_by_physical_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.more_info_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.other_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.heard_about_pfi') }}
                    </th>
                    <th>
                        {{ trans('cruds.dogsOwnersAnwer.fields.ip') }}
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
@can('dogs_owners_anwer_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.dogs-owners-anwers.massDestroy') }}",
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
    ajax: "{{ route('admin.dogs-owners-anwers.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'email', name: 'email' },
{ data: 'department_name', name: 'department.name' },
{ data: 'city_name', name: 'city.name' },
{ data: 'dog_appear', name: 'dog_appear' },
{ data: 'other_1', name: 'other_1' },
{ data: 'dog_consideration', name: 'dog_consideration' },
{ data: 'other_2', name: 'other_2' },
{ data: 'dog_food_advice', name: 'dog_food_advice' },
{ data: 'dog_food_choose', name: 'dog_food_choose' },
{ data: 'other_4', name: 'other_4' },
{ data: 'dog_diff_nutrition', name: 'dog_diff_nutrition' },
{ data: 'dog_diet_owner', name: 'dog_diet_owner' },
{ data: 'dog_food_type', name: 'dog_food_type' },
{ data: 'diamond_naturals_8', name: 'diamond_naturals_8' },
{ data: 'purina_8', name: 'purina_8' },
{ data: 'hills_8', name: 'hills_8' },
{ data: 'pedigree_8', name: 'pedigree_8' },
{ data: 'royal_canin_8', name: 'royal_canin_8' },
{ data: 'mars_8', name: 'mars_8' },
{ data: 'other_8', name: 'other_8' },
{ data: 'dog_percent_concentrate', name: 'dog_percent_concentrate' },
{ data: 'dog_candies', name: 'dog_candies' },
{ data: 'dog_change_food', name: 'dog_change_food' },
{ data: 'general_consultation_12', name: 'general_consultation_12' },
{ data: 'dermatological_disease_12', name: 'dermatological_disease_12' },
{ data: 'digestive_disease_12', name: 'digestive_disease_12' },
{ data: 'periodontal_disease_12', name: 'periodontal_disease_12' },
{ data: 'neuro_problems_12', name: 'neuro_problems_12' },
{ data: 'metabolic_disease_12', name: 'metabolic_disease_12' },
{ data: 'orthopedic_problems_12', name: 'orthopedic_problems_12' },
{ data: 'emergency_case_12', name: 'emergency_case_12' },
{ data: 'other_12', name: 'other_12' },
{ data: 'dog_actual_disease', name: 'dog_actual_disease' },
{ data: 'avoid_obesity_14', name: 'avoid_obesity_14' },
{ data: 'read_food_tags_14', name: 'read_food_tags_14' },
{ data: 'healthy_snacks_14', name: 'healthy_snacks_14' },
{ data: 'diets_switch_14', name: 'diets_switch_14' },
{ data: 'food_by_grow_14', name: 'food_by_grow_14' },
{ data: 'food_by_physical_14', name: 'food_by_physical_14' },
{ data: 'more_info_14', name: 'more_info_14' },
{ data: 'other_14', name: 'other_14' },
{ data: 'heard_about_pfi', name: 'heard_about_pfi' },
{ data: 'ip', name: 'ip' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  };
  let table = $('.datatable-DogsOwnersAnwer').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection