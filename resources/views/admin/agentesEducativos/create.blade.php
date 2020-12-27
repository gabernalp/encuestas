@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.agentesEducativo.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.agentes-educativos.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="nombre">{{ trans('cruds.agentesEducativo.fields.nombre') }}</label>
                <input class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" type="text" name="nombre" id="nombre" value="{{ old('nombre', '') }}" required>
                @if($errors->has('nombre'))
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agentesEducativo.fields.nombre_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="apellido">{{ trans('cruds.agentesEducativo.fields.apellido') }}</label>
                <input class="form-control {{ $errors->has('apellido') ? 'is-invalid' : '' }}" type="text" name="apellido" id="apellido" value="{{ old('apellido', '') }}" required>
                @if($errors->has('apellido'))
                    <span class="text-danger">{{ $errors->first('apellido') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agentesEducativo.fields.apellido_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="documento">{{ trans('cruds.agentesEducativo.fields.documento') }}</label>
                <input class="form-control {{ $errors->has('documento') ? 'is-invalid' : '' }}" type="text" name="documento" id="documento" value="{{ old('documento', '') }}" required>
                @if($errors->has('documento'))
                    <span class="text-danger">{{ $errors->first('documento') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agentesEducativo.fields.documento_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="departamento_id">{{ trans('cruds.agentesEducativo.fields.departamento') }}</label>
                <select class="form-control select2 {{ $errors->has('departamento') ? 'is-invalid' : '' }}" name="departamento_id" id="departamento_id">
                    @foreach($departamentos as $id => $departamento)
                        <option value="{{ $id }}" {{ old('departamento_id') == $id ? 'selected' : '' }}>{{ $departamento }}</option>
                    @endforeach
                </select>
                @if($errors->has('departamento'))
                    <span class="text-danger">{{ $errors->first('departamento') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agentesEducativo.fields.departamento_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="municipio_id">{{ trans('cruds.agentesEducativo.fields.municipio') }}</label>
                <select class="form-control select2 {{ $errors->has('municipio') ? 'is-invalid' : '' }}" name="municipio_id" id="municipio_id">
                    @foreach($municipios as $id => $municipio)
                        <option value="{{ $id }}" {{ old('municipio_id') == $id ? 'selected' : '' }}>{{ $municipio }}</option>
                    @endforeach
                </select>
                @if($errors->has('municipio'))
                    <span class="text-danger">{{ $errors->first('municipio') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agentesEducativo.fields.municipio_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="telefono_celular">{{ trans('cruds.agentesEducativo.fields.telefono_celular') }}</label>
                <input class="form-control {{ $errors->has('telefono_celular') ? 'is-invalid' : '' }}" type="text" name="telefono_celular" id="telefono_celular" value="{{ old('telefono_celular', '') }}">
                @if($errors->has('telefono_celular'))
                    <span class="text-danger">{{ $errors->first('telefono_celular') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agentesEducativo.fields.telefono_celular_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.agentesEducativo.fields.institucion') }}</label>
                <select class="form-control {{ $errors->has('institucion') ? 'is-invalid' : '' }}" name="institucion" id="institucion">
                    <option value disabled {{ old('institucion', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\AgentesEducativo::INSTITUCION_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('institucion', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('institucion'))
                    <span class="text-danger">{{ $errors->first('institucion') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agentesEducativo.fields.institucion_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.agentesEducativo.fields.rol') }}</label>
                <select class="form-control {{ $errors->has('rol') ? 'is-invalid' : '' }}" name="rol" id="rol">
                    <option value disabled {{ old('rol', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\AgentesEducativo::ROL_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('rol', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('rol'))
                    <span class="text-danger">{{ $errors->first('rol') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agentesEducativo.fields.rol_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.agentesEducativo.fields.modalidad') }}</label>
                <select class="form-control {{ $errors->has('modalidad') ? 'is-invalid' : '' }}" name="modalidad" id="modalidad">
                    <option value disabled {{ old('modalidad', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\AgentesEducativo::MODALIDAD_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('modalidad', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('modalidad'))
                    <span class="text-danger">{{ $errors->first('modalidad') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agentesEducativo.fields.modalidad_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.agentesEducativo.fields.conectividad') }}</label>
                <select class="form-control {{ $errors->has('conectividad') ? 'is-invalid' : '' }}" name="conectividad" id="conectividad">
                    <option value disabled {{ old('conectividad', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\AgentesEducativo::CONECTIVIDAD_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('conectividad', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('conectividad'))
                    <span class="text-danger">{{ $errors->first('conectividad') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agentesEducativo.fields.conectividad_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('terminos') ? 'is-invalid' : '' }}">
                    <input class="form-check-input" type="checkbox" name="terminos" id="terminos" value="1" required {{ old('terminos', 0) == 1 || old('terminos') === null ? 'checked' : '' }}>
                    <label class="required form-check-label" for="terminos">{{ trans('cruds.agentesEducativo.fields.terminos') }}</label>
                </div>
                @if($errors->has('terminos'))
                    <span class="text-danger">{{ $errors->first('terminos') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agentesEducativo.fields.terminos_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('privacidad') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="privacidad" value="0">
                    <input class="form-check-input" type="checkbox" name="privacidad" id="privacidad" value="1" {{ old('privacidad', 0) == 1 || old('privacidad') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="privacidad">{{ trans('cruds.agentesEducativo.fields.privacidad') }}</label>
                </div>
                @if($errors->has('privacidad'))
                    <span class="text-danger">{{ $errors->first('privacidad') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agentesEducativo.fields.privacidad_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ip">{{ trans('cruds.agentesEducativo.fields.ip') }}</label>
                <input class="form-control {{ $errors->has('ip') ? 'is-invalid' : '' }}" type="text" name="ip" id="ip" value="{{ old('ip', '') }}">
                @if($errors->has('ip'))
                    <span class="text-danger">{{ $errors->first('ip') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.agentesEducativo.fields.ip_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection