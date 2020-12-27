@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.agentesEducativo.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.agentes-educativos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.agentesEducativo.fields.id') }}
                        </th>
                        <td>
                            {{ $agentesEducativo->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentesEducativo.fields.nombre') }}
                        </th>
                        <td>
                            {{ $agentesEducativo->nombre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentesEducativo.fields.apellido') }}
                        </th>
                        <td>
                            {{ $agentesEducativo->apellido }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentesEducativo.fields.documento') }}
                        </th>
                        <td>
                            {{ $agentesEducativo->documento }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentesEducativo.fields.departamento') }}
                        </th>
                        <td>
                            {{ $agentesEducativo->departamento->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentesEducativo.fields.municipio') }}
                        </th>
                        <td>
                            {{ $agentesEducativo->municipio->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentesEducativo.fields.telefono_celular') }}
                        </th>
                        <td>
                            {{ $agentesEducativo->telefono_celular }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentesEducativo.fields.institucion') }}
                        </th>
                        <td>
                            {{ App\AgentesEducativo::INSTITUCION_SELECT[$agentesEducativo->institucion] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentesEducativo.fields.rol') }}
                        </th>
                        <td>
                            {{ App\AgentesEducativo::ROL_SELECT[$agentesEducativo->rol] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentesEducativo.fields.modalidad') }}
                        </th>
                        <td>
                            {{ App\AgentesEducativo::MODALIDAD_SELECT[$agentesEducativo->modalidad] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentesEducativo.fields.conectividad') }}
                        </th>
                        <td>
                            {{ App\AgentesEducativo::CONECTIVIDAD_SELECT[$agentesEducativo->conectividad] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentesEducativo.fields.terminos') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $agentesEducativo->terminos ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentesEducativo.fields.privacidad') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $agentesEducativo->privacidad ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentesEducativo.fields.ip') }}
                        </th>
                        <td>
                            {{ $agentesEducativo->ip }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.agentes-educativos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection