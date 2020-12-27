<?php

namespace App\Http\Controllers\Admin;

use App\Ciudade;
use App\Departamento;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyVetAnswerRequest;
use App\Http\Requests\StoreVetAnswerRequest;
use App\Http\Requests\UpdateVetAnswerRequest;
use App\VetAnswer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VetAnswersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('vet_answer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vetAnswers = VetAnswer::with(['department', 'city'])->get();

        return view('admin.vetAnswers.index', compact('vetAnswers'));
    }

    public function create()
    {
        abort_if(Gate::denies('vet_answer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $departments = Departamento::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = Ciudade::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.vetAnswers.create', compact('departments', 'cities'));
    }

    public function store(StoreVetAnswerRequest $request)
    {
        $vetAnswer = VetAnswer::create($request->all());

        return redirect()->route('admin.vet-answers.index');
    }

    public function edit(VetAnswer $vetAnswer)
    {
        abort_if(Gate::denies('vet_answer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $departments = Departamento::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = Ciudade::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $vetAnswer->load('department', 'city');

        return view('admin.vetAnswers.edit', compact('departments', 'cities', 'vetAnswer'));
    }

    public function update(UpdateVetAnswerRequest $request, VetAnswer $vetAnswer)
    {
        $vetAnswer->update($request->all());

        return redirect()->route('admin.vet-answers.index');
    }

    public function show(VetAnswer $vetAnswer)
    {
        abort_if(Gate::denies('vet_answer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vetAnswer->load('department', 'city');

        return view('admin.vetAnswers.show', compact('vetAnswer'));
    }

    public function destroy(VetAnswer $vetAnswer)
    {
        abort_if(Gate::denies('vet_answer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vetAnswer->delete();

        return back();
    }

    public function massDestroy(MassDestroyVetAnswerRequest $request)
    {
        VetAnswer::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
