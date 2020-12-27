<div class="m-3">
    @can('agentes_educativo_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.agentes-educativos.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.agentesEducativo.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.agentesEducativo.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-municipioAgentesEducativos">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.agentesEducativo.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.agentesEducativo.fields.nombre') }}
                            </th>
                            <th>
                                {{ trans('cruds.agentesEducativo.fields.apellido') }}
                            </th>
                            <th>
                                {{ trans('cruds.agentesEducativo.fields.documento') }}
                            </th>
                            <th>
                                {{ trans('cruds.agentesEducativo.fields.departamento') }}
                            </th>
                            <th>
                                {{ trans('cruds.agentesEducativo.fields.municipio') }}
                            </th>
                            <th>
                                {{ trans('cruds.agentesEducativo.fields.telefono_celular') }}
                            </th>
                            <th>
                                {{ trans('cruds.agentesEducativo.fields.institucion') }}
                            </th>
                            <th>
                                {{ trans('cruds.agentesEducativo.fields.rol') }}
                            </th>
                            <th>
                                {{ trans('cruds.agentesEducativo.fields.modalidad') }}
                            </th>
                            <th>
                                {{ trans('cruds.agentesEducativo.fields.conectividad') }}
                            </th>
                            <th>
                                {{ trans('cruds.agentesEducativo.fields.terminos') }}
                            </th>
                            <th>
                                {{ trans('cruds.agentesEducativo.fields.privacidad') }}
                            </th>
                            <th>
                                {{ trans('cruds.agentesEducativo.fields.ip') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agentesEducativos as $key => $agentesEducativo)
                            <tr data-entry-id="{{ $agentesEducativo->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $agentesEducativo->id ?? '' }}
                                </td>
                                <td>
                                    {{ $agentesEducativo->nombre ?? '' }}
                                </td>
                                <td>
                                    {{ $agentesEducativo->apellido ?? '' }}
                                </td>
                                <td>
                                    {{ $agentesEducativo->documento ?? '' }}
                                </td>
                                <td>
                                    {{ $agentesEducativo->departamento->name ?? '' }}
                                </td>
                                <td>
                                    {{ $agentesEducativo->municipio->name ?? '' }}
                                </td>
                                <td>
                                    {{ $agentesEducativo->telefono_celular ?? '' }}
                                </td>
                                <td>
                                    {{ App\AgentesEducativo::INSTITUCION_SELECT[$agentesEducativo->institucion] ?? '' }}
                                </td>
                                <td>
                                    {{ App\AgentesEducativo::ROL_SELECT[$agentesEducativo->rol] ?? '' }}
                                </td>
                                <td>
                                    {{ App\AgentesEducativo::MODALIDAD_SELECT[$agentesEducativo->modalidad] ?? '' }}
                                </td>
                                <td>
                                    {{ App\AgentesEducativo::CONECTIVIDAD_SELECT[$agentesEducativo->conectividad] ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $agentesEducativo->terminos ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $agentesEducativo->terminos ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $agentesEducativo->privacidad ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $agentesEducativo->privacidad ? 'checked' : '' }}>
                                </td>
                                <td>
                                    {{ $agentesEducativo->ip ?? '' }}
                                </td>
                                <td>
                                    @can('agentes_educativo_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.agentes-educativos.show', $agentesEducativo->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('agentes_educativo_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.agentes-educativos.edit', $agentesEducativo->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('agentes_educativo_delete')
                                        <form action="{{ route('admin.agentes-educativos.destroy', $agentesEducativo->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('agentes_educativo_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.agentes-educativos.massDestroy') }}",
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
    pageLength: 100,
  });
  let table = $('.datatable-municipioAgentesEducativos:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection