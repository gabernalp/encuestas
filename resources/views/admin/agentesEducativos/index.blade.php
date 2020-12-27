@extends('layouts.admin')
@section('content')
@can('agentes_educativo_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.agentes-educativos.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.agentesEducativo.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'AgentesEducativo', 'route' => 'admin.agentes-educativos.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.agentesEducativo.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-AgentesEducativo">
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
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('agentes_educativo_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.agentes-educativos.massDestroy') }}",
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
    ajax: "{{ route('admin.agentes-educativos.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'nombre', name: 'nombre' },
{ data: 'apellido', name: 'apellido' },
{ data: 'documento', name: 'documento' },
{ data: 'departamento_name', name: 'departamento.name' },
{ data: 'municipio_name', name: 'municipio.name' },
{ data: 'telefono_celular', name: 'telefono_celular' },
{ data: 'institucion', name: 'institucion' },
{ data: 'rol', name: 'rol' },
{ data: 'modalidad', name: 'modalidad' },
{ data: 'conectividad', name: 'conectividad' },
{ data: 'terminos', name: 'terminos' },
{ data: 'privacidad', name: 'privacidad' },
{ data: 'ip', name: 'ip' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-AgentesEducativo').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection