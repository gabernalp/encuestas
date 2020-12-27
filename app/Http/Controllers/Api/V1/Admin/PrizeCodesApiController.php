<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrizeCodeRequest;
use App\Http\Requests\UpdatePrizeCodeRequest;
use App\Http\Resources\Admin\PrizeCodeResource;
use App\PrizeCode;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PrizeCodesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('prize_code_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PrizeCodeResource(PrizeCode::all());
    }

    public function store(StorePrizeCodeRequest $request)
    {
        $prizeCode = PrizeCode::create($request->all());

        return (new PrizeCodeResource($prizeCode))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(PrizeCode $prizeCode)
    {
        abort_if(Gate::denies('prize_code_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PrizeCodeResource($prizeCode);
    }

    public function update(UpdatePrizeCodeRequest $request, PrizeCode $prizeCode)
    {
        $prizeCode->update($request->all());

        return (new PrizeCodeResource($prizeCode))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(PrizeCode $prizeCode)
    {
        abort_if(Gate::denies('prize_code_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $prizeCode->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
