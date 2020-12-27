<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\DogsOwnersAnwer;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDogsOwnersAnwerRequest;
use App\Http\Requests\UpdateDogsOwnersAnwerRequest;
use App\Http\Resources\Admin\DogsOwnersAnwerResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DogsOwnersAnwersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('dogs_owners_anwer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DogsOwnersAnwerResource(DogsOwnersAnwer::with(['department', 'city'])->get());
    }

    public function store(StoreDogsOwnersAnwerRequest $request)
    {
        $dogsOwnersAnwer = DogsOwnersAnwer::create($request->all());

        return (new DogsOwnersAnwerResource($dogsOwnersAnwer))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(DogsOwnersAnwer $dogsOwnersAnwer)
    {
        abort_if(Gate::denies('dogs_owners_anwer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DogsOwnersAnwerResource($dogsOwnersAnwer->load(['department', 'city']));
    }

    public function update(UpdateDogsOwnersAnwerRequest $request, DogsOwnersAnwer $dogsOwnersAnwer)
    {
        $dogsOwnersAnwer->update($request->all());

        return (new DogsOwnersAnwerResource($dogsOwnersAnwer))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(DogsOwnersAnwer $dogsOwnersAnwer)
    {
        abort_if(Gate::denies('dogs_owners_anwer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dogsOwnersAnwer->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
