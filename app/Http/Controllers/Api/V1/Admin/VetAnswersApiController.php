<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVetAnswerRequest;
use App\Http\Requests\UpdateVetAnswerRequest;
use App\Http\Resources\Admin\VetAnswerResource;
use App\VetAnswer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VetAnswersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('vet_answer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new VetAnswerResource(VetAnswer::with(['department', 'city'])->get());
    }

    public function store(StoreVetAnswerRequest $request)
    {
        $vetAnswer = VetAnswer::create($request->all());

        return (new VetAnswerResource($vetAnswer))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(VetAnswer $vetAnswer)
    {
        abort_if(Gate::denies('vet_answer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new VetAnswerResource($vetAnswer->load(['department', 'city']));
    }

    public function update(UpdateVetAnswerRequest $request, VetAnswer $vetAnswer)
    {
        $vetAnswer->update($request->all());

        return (new VetAnswerResource($vetAnswer))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(VetAnswer $vetAnswer)
    {
        abort_if(Gate::denies('vet_answer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vetAnswer->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
