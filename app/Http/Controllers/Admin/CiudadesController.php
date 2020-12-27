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
use Yajra\DataTables\Facades\DataTables;

class CiudadesController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('ciudade_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Ciudade::with(['departamento'])->select(sprintf('%s.*', (new Ciudade)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'ciudade_show';
                $editGate      = 'ciudade_edit';
                $deleteGate    = 'ciudade_delete';
                $crudRoutePart = 'ciudades';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('code', function ($row) {
                return $row->code ? $row->code : "";
            });
            $table->addColumn('departamento_name', function ($row) {
                return $row->departamento ? $row->departamento->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'departamento']);

            return $table->make(true);
        }

        return view('admin.ciudades.index');
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
