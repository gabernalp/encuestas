<div class="m-3">
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
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-cityCatsOwnersAnwers">
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
                    <tbody>
                        @foreach($catsOwnersAnwers as $key => $catsOwnersAnwer)
                            <tr data-entry-id="{{ $catsOwnersAnwer->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->id ?? '' }}
                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->name ?? '' }}
                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->email ?? '' }}
                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->department->name ?? '' }}
                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->city->name ?? '' }}
                                </td>
                                <td>
                                    {{ App\CatsOwnersAnwer::CAT_APPEAR_RADIO[$catsOwnersAnwer->cat_appear] ?? '' }}
                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->other_1 ?? '' }}
                                </td>
                                <td>
                                    {{ App\CatsOwnersAnwer::CAT_CONSIDERATION_RADIO[$catsOwnersAnwer->cat_consideration] ?? '' }}
                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->other_2 ?? '' }}
                                </td>
                                <td>
                                    {{ App\CatsOwnersAnwer::CAT_FOOD_ADVICE_RADIO[$catsOwnersAnwer->cat_food_advice] ?? '' }}
                                </td>
                                <td>
                                    {{ App\CatsOwnersAnwer::CAT_FOOD_CHOOSE_RADIO[$catsOwnersAnwer->cat_food_choose] ?? '' }}
                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->other_4 ?? '' }}
                                </td>
                                <td>
                                    {{ App\CatsOwnersAnwer::CAT_DIFF_NUTRITION_RADIO[$catsOwnersAnwer->cat_diff_nutrition] ?? '' }}
                                </td>
                                <td>
                                    {{ App\CatsOwnersAnwer::CAT_DIET_OWNER_RADIO[$catsOwnersAnwer->cat_diet_owner] ?? '' }}
                                </td>
                                <td>
                                    {{ App\CatsOwnersAnwer::CAT_FOOD_TYPE_RADIO[$catsOwnersAnwer->cat_food_type] ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->diamond_naturals_8 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->diamond_naturals_8 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->purina_8 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->purina_8 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->mars_8 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->mars_8 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->whiskas_8 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->whiskas_8 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->other_8 ?? '' }}
                                </td>
                                <td>
                                    {{ App\CatsOwnersAnwer::CAT_PERCENT_CONCENTRATE_RADIO[$catsOwnersAnwer->cat_percent_concentrate] ?? '' }}
                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->cat_candies ?? '' }}
                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->cat_change_food ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->general_consultation_12 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->general_consultation_12 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->dermatological_disease_12 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->dermatological_disease_12 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->digestive_disease_12 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->digestive_disease_12 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->periodontal_disease_12 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->periodontal_disease_12 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->neuro_problems_12 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->neuro_problems_12 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->metabolic_disease_12 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->metabolic_disease_12 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->orthopedic_problems_12 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->orthopedic_problems_12 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->emergency_case_12 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->emergency_case_12 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->other_12 ?? '' }}
                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->cat_actual_disease ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->avoid_obesity_14 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->avoid_obesity_14 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->read_food_tags_14 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->read_food_tags_14 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->healthy_snacks_14 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->healthy_snacks_14 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->diets_switch_14 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->diets_switch_14 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->food_by_grow_14 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->food_by_grow_14 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->food_by_physical_14 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->food_by_physical_14 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $catsOwnersAnwer->more_info_14 ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $catsOwnersAnwer->more_info_14 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->other_14 ?? '' }}
                                </td>
                                <td>
                                    {{ App\CatsOwnersAnwer::HEARD_ABOUT_PFI_RADIO[$catsOwnersAnwer->heard_about_pfi] ?? '' }}
                                </td>
                                <td>
                                    {{ $catsOwnersAnwer->ip ?? '' }}
                                </td>
                                <td>
                                    @can('cats_owners_anwer_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.cats-owners-anwers.show', $catsOwnersAnwer->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('cats_owners_anwer_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.cats-owners-anwers.edit', $catsOwnersAnwer->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('cats_owners_anwer_delete')
                                        <form action="{{ route('admin.cats-owners-anwers.destroy', $catsOwnersAnwer->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('cats_owners_anwer_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.cats-owners-anwers.massDestroy') }}",
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
  let table = $('.datatable-cityCatsOwnersAnwers:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection