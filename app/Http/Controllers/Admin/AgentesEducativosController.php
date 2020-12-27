<?php

namespace App\Http\Controllers\Admin;

use App\AgentesEducativo;
use App\Ciudade;
use App\Departamento;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyAgentesEducativoRequest;
use App\Http\Requests\StoreAgentesEducativoRequest;
use App\Http\Requests\UpdateAgentesEducativoRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AgentesEducativosController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('agentes_educativo_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = AgentesEducativo::with(['departamento', 'municipio'])->select(sprintf('%s.*', (new AgentesEducativo)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'agentes_educativo_show';
                $editGate      = 'agentes_educativo_edit';
                $deleteGate    = 'agentes_educativo_delete';
                $crudRoutePart = 'agentes-educativos';

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
            $table->editColumn('nombre', function ($row) {
                return $row->nombre ? $row->nombre : "";
            });
            $table->editColumn('apellido', function ($row) {
                return $row->apellido ? $row->apellido : "";
            });
            $table->editColumn('documento', function ($row) {
                return $row->documento ? $row->documento : "";
            });
            $table->addColumn('departamento_name', function ($row) {
                return $row->departamento ? $row->departamento->name : '';
            });

            $table->addColumn('municipio_name', function ($row) {
                return $row->municipio ? $row->municipio->name : '';
            });

            $table->editColumn('telefono_celular', function ($row) {
                return $row->telefono_celular ? $row->telefono_celular : "";
            });
            $table->editColumn('institucion', function ($row) {
                return $row->institucion ? AgentesEducativo::INSTITUCION_SELECT[$row->institucion] : '';
            });
            $table->editColumn('rol', function ($row) {
                return $row->rol ? AgentesEducativo::ROL_SELECT[$row->rol] : '';
            });
            $table->editColumn('modalidad', function ($row) {
                return $row->modalidad ? AgentesEducativo::MODALIDAD_SELECT[$row->modalidad] : '';
            });
            $table->editColumn('conectividad', function ($row) {
                return $row->conectividad ? AgentesEducativo::CONECTIVIDAD_SELECT[$row->conectividad] : '';
            });
            $table->editColumn('terminos', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->terminos ? 'checked' : null) . '>';
            });
            $table->editColumn('privacidad', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->privacidad ? 'checked' : null) . '>';
            });
            $table->editColumn('ip', function ($row) {
                return $row->ip ? $row->ip : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'departamento', 'municipio', 'terminos', 'privacidad']);

            return $table->make(true);
        }

        return view('admin.agentesEducativos.index');
    }

    public function create()
    {
        abort_if(Gate::denies('agentes_educativo_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $departamentos = Departamento::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $municipios = Ciudade::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.agentesEducativos.create', compact('departamentos', 'municipios'));
    }

    public function store(StoreAgentesEducativoRequest $request)
    {
        $agentesEducativo = AgentesEducativo::create($request->all());

        return redirect()->route('admin.agentes-educativos.index');
    }

    public function edit(AgentesEducativo $agentesEducativo)
    {
        abort_if(Gate::denies('agentes_educativo_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $departamentos = Departamento::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $municipios = Ciudade::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $agentesEducativo->load('departamento', 'municipio');

        return view('admin.agentesEducativos.edit', compact('departamentos', 'municipios', 'agentesEducativo'));
    }

    public function update(UpdateAgentesEducativoRequest $request, AgentesEducativo $agentesEducativo)
    {
        $agentesEducativo->update($request->all());

        return redirect()->route('admin.agentes-educativos.index');
    }

    public function show(AgentesEducativo $agentesEducativo)
    {
        abort_if(Gate::denies('agentes_educativo_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agentesEducativo->load('departamento', 'municipio');

        return view('admin.agentesEducativos.show', compact('agentesEducativo'));
    }

    public function destroy(AgentesEducativo $agentesEducativo)
    {
        abort_if(Gate::denies('agentes_educativo_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agentesEducativo->delete();

        return back();
    }

    public function massDestroy(MassDestroyAgentesEducativoRequest $request)
    {
        AgentesEducativo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
