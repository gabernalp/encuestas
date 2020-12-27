<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Ciudade;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCiudadeRequest;
use App\Http\Requests\UpdateCiudadeRequest;
use App\Http\Resources\Admin\CiudadeResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CiudadesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ciudade_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CiudadeResource(Ciudade::with(['departamento'])->get());
    }

    public function store(StoreCiudadeRequest $request)
    {
        $ciudade = Ciudade::create($request->all());

        return (new CiudadeResource($ciudade))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Ciudade $ciudade)
    {
        abort_if(Gate::denies('ciudade_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CiudadeResource($ciudade->load(['departamento']));
    }

    public function update(UpdateCiudadeRequest $request, Ciudade $ciudade)
    {
        $ciudade->update($request->all());

        return (new CiudadeResource($ciudade))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Ciudade $ciudade)
    {
        abort_if(Gate::denies('ciudade_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ciudade->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
