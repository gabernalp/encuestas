<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\CatsOwnersAnwer;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCatsOwnersAnwerRequest;
use App\Http\Requests\UpdateCatsOwnersAnwerRequest;
use App\Http\Resources\Admin\CatsOwnersAnwerResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CatsOwnersAnwersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cats_owners_anwer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CatsOwnersAnwerResource(CatsOwnersAnwer::with(['department', 'city'])->get());
    }

    public function store(StoreCatsOwnersAnwerRequest $request)
    {
        $catsOwnersAnwer = CatsOwnersAnwer::create($request->all());

        return (new CatsOwnersAnwerResource($catsOwnersAnwer))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CatsOwnersAnwer $catsOwnersAnwer)
    {
        abort_if(Gate::denies('cats_owners_anwer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CatsOwnersAnwerResource($catsOwnersAnwer->load(['department', 'city']));
    }

    public function update(UpdateCatsOwnersAnwerRequest $request, CatsOwnersAnwer $catsOwnersAnwer)
    {
        $catsOwnersAnwer->update($request->all());

        return (new CatsOwnersAnwerResource($catsOwnersAnwer))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CatsOwnersAnwer $catsOwnersAnwer)
    {
        abort_if(Gate::denies('cats_owners_anwer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $catsOwnersAnwer->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
