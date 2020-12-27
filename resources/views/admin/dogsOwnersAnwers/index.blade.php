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
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-DogsOwnersAnwer">
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
                <tbody>
                    @foreach($dogsOwnersAnwers as $key => $dogsOwnersAnwer)
                        <tr data-entry-id="{{ $dogsOwnersAnwer->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->id ?? '' }}
                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->name ?? '' }}
                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->email ?? '' }}
                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->department->name ?? '' }}
                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->city->name ?? '' }}
                            </td>
                            <td>
                                {{ App\DogsOwnersAnwer::DOG_APPEAR_RADIO[$dogsOwnersAnwer->dog_appear] ?? '' }}
                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->other_1 ?? '' }}
                            </td>
                            <td>
                                {{ App\DogsOwnersAnwer::DOG_CONSIDERATION_RADIO[$dogsOwnersAnwer->dog_consideration] ?? '' }}
                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->other_2 ?? '' }}
                            </td>
                            <td>
                                {{ App\DogsOwnersAnwer::DOG_FOOD_ADVICE_RADIO[$dogsOwnersAnwer->dog_food_advice] ?? '' }}
                            </td>
                            <td>
                                {{ App\DogsOwnersAnwer::DOG_FOOD_CHOOSE_RADIO[$dogsOwnersAnwer->dog_food_choose] ?? '' }}
                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->other_4 ?? '' }}
                            </td>
                            <td>
                                {{ App\DogsOwnersAnwer::DOG_DIFF_NUTRITION_RADIO[$dogsOwnersAnwer->dog_diff_nutrition] ?? '' }}
                            </td>
                            <td>
                                {{ App\DogsOwnersAnwer::DOG_DIET_OWNER_RADIO[$dogsOwnersAnwer->dog_diet_owner] ?? '' }}
                            </td>
                            <td>
                                {{ App\DogsOwnersAnwer::DOG_FOOD_TYPE_RADIO[$dogsOwnersAnwer->dog_food_type] ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->diamond_naturals_8 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->diamond_naturals_8 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->purina_8 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->purina_8 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->hills_8 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->hills_8 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->pedigree_8 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->pedigree_8 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->royal_canin_8 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->royal_canin_8 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->mars_8 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->mars_8 ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->other_8 ?? '' }}
                            </td>
                            <td>
                                {{ App\DogsOwnersAnwer::DOG_PERCENT_CONCENTRATE_RADIO[$dogsOwnersAnwer->dog_percent_concentrate] ?? '' }}
                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->dog_candies ?? '' }}
                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->dog_change_food ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->general_consultation_12 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->general_consultation_12 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->dermatological_disease_12 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->dermatological_disease_12 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->digestive_disease_12 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->digestive_disease_12 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->periodontal_disease_12 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->periodontal_disease_12 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->neuro_problems_12 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->neuro_problems_12 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->metabolic_disease_12 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->metabolic_disease_12 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->orthopedic_problems_12 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->orthopedic_problems_12 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->emergency_case_12 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->emergency_case_12 ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->other_12 ?? '' }}
                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->dog_actual_disease ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->avoid_obesity_14 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->avoid_obesity_14 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->read_food_tags_14 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->read_food_tags_14 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->healthy_snacks_14 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->healthy_snacks_14 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->diets_switch_14 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->diets_switch_14 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->food_by_grow_14 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->food_by_grow_14 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->food_by_physical_14 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->food_by_physical_14 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $dogsOwnersAnwer->more_info_14 ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $dogsOwnersAnwer->more_info_14 ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->other_14 ?? '' }}
                            </td>
                            <td>
                                {{ App\DogsOwnersAnwer::HEARD_ABOUT_PFI_RADIO[$dogsOwnersAnwer->heard_about_pfi] ?? '' }}
                            </td>
                            <td>
                                {{ $dogsOwnersAnwer->ip ?? '' }}
                            </td>
                            <td>
                                @can('dogs_owners_anwer_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.dogs-owners-anwers.show', $dogsOwnersAnwer->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('dogs_owners_anwer_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.dogs-owners-anwers.edit', $dogsOwnersAnwer->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('dogs_owners_anwer_delete')
                                    <form action="{{ route('admin.dogs-owners-anwers.destroy', $dogsOwnersAnwer->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('dogs_owners_anwer_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.dogs-owners-anwers.massDestroy') }}",
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
  let table = $('.datatable-DogsOwnersAnwer:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection