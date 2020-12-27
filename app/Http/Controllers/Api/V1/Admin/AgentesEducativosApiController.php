<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\AgentesEducativo;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAgentesEducativoRequest;
use App\Http\Requests\UpdateAgentesEducativoRequest;
use App\Http\Resources\Admin\AgentesEducativoResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgentesEducativosApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('agentes_educativo_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AgentesEducativoResource(AgentesEducativo::with(['departamento', 'municipio'])->get());
    }

    public function store(StoreAgentesEducativoRequest $request)
    {
        $agentesEducativo = AgentesEducativo::create($request->all());

        return (new AgentesEducativoResource($agentesEducativo))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(AgentesEducativo $agentesEducativo)
    {
        abort_if(Gate::denies('agentes_educativo_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AgentesEducativoResource($agentesEducativo->load(['departamento', 'municipio']));
    }

    public function update(UpdateAgentesEducativoRequest $request, AgentesEducativo $agentesEducativo)
    {
        $agentesEducativo->update($request->all());

        return (new AgentesEducativoResource($agentesEducativo))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(AgentesEducativo $agentesEducativo)
    {
        abort_if(Gate::denies('agentes_educativo_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agentesEducativo->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
