@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.departamento.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.departamentos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.departamento.fields.id') }}
                        </th>
                        <td>
                            {{ $departamento->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.departamento.fields.name') }}
                        </th>
                        <td>
                            {{ $departamento->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.departamento.fields.code') }}
                        </th>
                        <td>
                            {{ $departamento->code }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.departamentos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#departamento_agentes_educativos" role="tab" data-toggle="tab">
                {{ trans('cruds.agentesEducativo.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="departamento_agentes_educativos">
            @includeIf('admin.departamentos.relationships.departamentoAgentesEducativos', ['agentesEducativos' => $departamento->departamentoAgentesEducativos])
        </div>
    </div>
</div>

@endsection