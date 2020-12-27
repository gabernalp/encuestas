@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.prizeCode.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.prize-codes.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="code">{{ trans('cruds.prizeCode.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}">
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.prizeCode.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="poll_name">{{ trans('cruds.prizeCode.fields.poll_name') }}</label>
                <input class="form-control {{ $errors->has('poll_name') ? 'is-invalid' : '' }}" type="text" name="poll_name" id="poll_name" value="{{ old('poll_name', '') }}">
                @if($errors->has('poll_name'))
                    <span class="text-danger">{{ $errors->first('poll_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.prizeCode.fields.poll_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contestant">{{ trans('cruds.prizeCode.fields.contestant') }}</label>
                <input class="form-control {{ $errors->has('contestant') ? 'is-invalid' : '' }}" type="text" name="contestant" id="contestant" value="{{ old('contestant', '') }}">
                @if($errors->has('contestant'))
                    <span class="text-danger">{{ $errors->first('contestant') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.prizeCode.fields.contestant_helper') }}</span>
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