@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.ciudade.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ciudades.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.ciudade.fields.id') }}
                        </th>
                        <td>
                            {{ $ciudade->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ciudade.fields.name') }}
                        </th>
                        <td>
                            {{ $ciudade->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ciudade.fields.code') }}
                        </th>
                        <td>
                            {{ $ciudade->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ciudade.fields.departamento') }}
                        </th>
                        <td>
                            {{ $ciudade->departamento->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ciudades.index') }}">
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
            <a class="nav-link" href="#municipio_agentes_educativos" role="tab" data-toggle="tab">
                {{ trans('cruds.agentesEducativo.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#city_cats_owners_anwers" role="tab" data-toggle="tab">
                {{ trans('cruds.catsOwnersAnwer.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#city_dogs_owners_anwers" role="tab" data-toggle="tab">
                {{ trans('cruds.dogsOwnersAnwer.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#city_vet_answers" role="tab" data-toggle="tab">
                {{ trans('cruds.vetAnswer.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="municipio_agentes_educativos">
            @includeIf('admin.ciudades.relationships.municipioAgentesEducativos', ['agentesEducativos' => $ciudade->municipioAgentesEducativos])
        </div>
        <div class="tab-pane" role="tabpanel" id="city_cats_owners_anwers">
            @includeIf('admin.ciudades.relationships.cityCatsOwnersAnwers', ['catsOwnersAnwers' => $ciudade->cityCatsOwnersAnwers])
        </div>
        <div class="tab-pane" role="tabpanel" id="city_dogs_owners_anwers">
            @includeIf('admin.ciudades.relationships.cityDogsOwnersAnwers', ['dogsOwnersAnwers' => $ciudade->cityDogsOwnersAnwers])
        </div>
        <div class="tab-pane" role="tabpanel" id="city_vet_answers">
            @includeIf('admin.ciudades.relationships.cityVetAnswers', ['vetAnswers' => $ciudade->cityVetAnswers])
        </div>
    </div>
</div>

@endsection