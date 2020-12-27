<?php

namespace App\Http\Controllers\Admin;

use App\Ciudade;
use App\Departamento;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyCiudadeRequest;
use App\Http\Requests\StoreCiudadeRequest;
use App\Http\Requests\UpdateCiudadeRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CiudadesController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('ciudade_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ciudades = Ciudade::with(['departamento'])->get();

        return view('admin.ciudades.index', compact('ciudades'));
    }

    public function create()
    {
        abort_if(Gate::denies('ciudade_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $departamentos = Departamento::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.ciudades.create', compact('departamentos'));
    }

    public function store(StoreCiudadeRequest $request)
    {
        $ciudade = Ciudade::create($request->all());

        return redirect()->route('admin.ciudades.index');
    }

    public function edit(Ciudade $ciudade)
    {
        abort_if(Gate::denies('ciudade_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $departamentos = Departamento::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $ciudade->load('departamento');

        return view('admin.ciudades.edit', compact('departamentos', 'ciudade'));
    }

    public function update(UpdateCiudadeRequest $request, Ciudade $ciudade)
    {
        $ciudade->update($request->all());

        return redirect()->route('admin.ciudades.index');
    }

    public function show(Ciudade $ciudade)
    {
        abort_if(Gate::denies('ciudade_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ciudade->load('departamento', 'municipioAgentesEducativos', 'cityCatsOwnersAnwers', 'cityDogsOwnersAnwers', 'cityVetAnswers');

        return view('admin.ciudades.show', compact('ciudade'));
    }

    public function destroy(Ciudade $ciudade)
    {
        abort_if(Gate::denies('ciudade_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ciudade->delete();

        return back();
    }

    public function massDestroy(MassDestroyCiudadeRequest $request)
    {
        Ciudade::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
