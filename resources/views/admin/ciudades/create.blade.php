@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.ciudade.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.ciudades.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.ciudade.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.ciudade.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="code">{{ trans('cruds.ciudade.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}">
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.ciudade.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="departamento_id">{{ trans('cruds.ciudade.fields.departamento') }}</label>
                <select class="form-control select2 {{ $errors->has('departamento') ? 'is-invalid' : '' }}" name="departamento_id" id="departamento_id">
                    @foreach($departamentos as $id => $departamento)
                        <option value="{{ $id }}" {{ old('departamento_id') == $id ? 'selected' : '' }}>{{ $departamento }}</option>
                    @endforeach
                </select>
                @if($errors->has('departamento'))
                    <span class="text-danger">{{ $errors->first('departamento') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.ciudade.fields.departamento_helper') }}</span>
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