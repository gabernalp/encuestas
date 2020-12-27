@extends('layouts.admin')
@section('content')
@can('cats_owners_anwer_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.cats-owners-anwers.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.catsOwnersAnwer.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.catsOwnersAnwer.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-CatsOwnersAnwer">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.email') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.department') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.city') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.cat_appear') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.other_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.cat_consideration') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.other_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.cat_food_advice') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.cat_food_choose') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.other_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.cat_diff_nutrition') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.cat_diet_owner') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.cat_food_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.diamond_naturals_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.purina_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.mars_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.whiskas_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.other_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.cat_percent_concentrate') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.cat_candies') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.cat_change_food') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.general_consultation_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.dermatological_disease_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.digestive_disease_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.periodontal_disease_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.neuro_problems_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.metabolic_disease_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.orthopedic_problems_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.emergency_case_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.other_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.cat_actual_disease') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.avoid_obesity_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.read_food_tags_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.healthy_snacks_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.diets_switch_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.food_by_grow_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.food_by_physical_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.more_info_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.other_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.heard_about_pfi') }}
                    </th>
                    <th>
                        {{ trans('cruds.catsOwnersAnwer.fields.ip') }}
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
@can('cats_owners_anwer_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.cats-owners-anwers.massDestroy') }}",
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
    ajax: "{{ route('admin.cats-owners-anwers.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'email', name: 'email' },
{ data: 'department_name', name: 'department.name' },
{ data: 'city_name', name: 'city.name' },
{ data: 'cat_appear', name: 'cat_appear' },
{ data: 'other_1', name: 'other_1' },
{ data: 'cat_consideration', name: 'cat_consideration' },
{ data: 'other_2', name: 'other_2' },
{ data: 'cat_food_advice', name: 'cat_food_advice' },
{ data: 'cat_food_choose', name: 'cat_food_choose' },
{ data: 'other_4', name: 'other_4' },
{ data: 'cat_diff_nutrition', name: 'cat_diff_nutrition' },
{ data: 'cat_diet_owner', name: 'cat_diet_owner' },
{ data: 'cat_food_type', name: 'cat_food_type' },
{ data: 'diamond_naturals_8', name: 'diamond_naturals_8' },
{ data: 'purina_8', name: 'purina_8' },
{ data: 'mars_8', name: 'mars_8' },
{ data: 'whiskas_8', name: 'whiskas_8' },
{ data: 'other_8', name: 'other_8' },
{ data: 'cat_percent_concentrate', name: 'cat_percent_concentrate' },
{ data: 'cat_candies', name: 'cat_candies' },
{ data: 'cat_change_food', name: 'cat_change_food' },
{ data: 'general_consultation_12', name: 'general_consultation_12' },
{ data: 'dermatological_disease_12', name: 'dermatological_disease_12' },
{ data: 'digestive_disease_12', name: 'digestive_disease_12' },
{ data: 'periodontal_disease_12', name: 'periodontal_disease_12' },
{ data: 'neuro_problems_12', name: 'neuro_problems_12' },
{ data: 'metabolic_disease_12', name: 'metabolic_disease_12' },
{ data: 'orthopedic_problems_12', name: 'orthopedic_problems_12' },
{ data: 'emergency_case_12', name: 'emergency_case_12' },
{ data: 'other_12', name: 'other_12' },
{ data: 'cat_actual_disease', name: 'cat_actual_disease' },
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
  let table = $('.datatable-CatsOwnersAnwer').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection