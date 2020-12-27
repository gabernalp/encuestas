<?php

namespace App\Http\Controllers\Admin;

use App\Ciudade;
use App\Departamento;
use App\DogsOwnersAnwer;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDogsOwnersAnwerRequest;
use App\Http\Requests\StoreDogsOwnersAnwerRequest;
use App\Http\Requests\UpdateDogsOwnersAnwerRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DogsOwnersAnwersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('dogs_owners_anwer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dogsOwnersAnwers = DogsOwnersAnwer::with(['department', 'city'])->get();

        return view('admin.dogsOwnersAnwers.index', compact('dogsOwnersAnwers'));
    }

    public function create()
    {
        abort_if(Gate::denies('dogs_owners_anwer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $departments = Departamento::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = Ciudade::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.dogsOwnersAnwers.create', compact('departments', 'cities'));
    }

    public function store(StoreDogsOwnersAnwerRequest $request)
    {
        $dogsOwnersAnwer = DogsOwnersAnwer::create($request->all());

        return redirect()->route('admin.dogs-owners-anwers.index');
    }

    public function edit(DogsOwnersAnwer $dogsOwnersAnwer)
    {
        abort_if(Gate::denies('dogs_owners_anwer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $departments = Departamento::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = Ciudade::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $dogsOwnersAnwer->load('department', 'city');

        return view('admin.dogsOwnersAnwers.edit', compact('departments', 'cities', 'dogsOwnersAnwer'));
    }

    public function update(UpdateDogsOwnersAnwerRequest $request, DogsOwnersAnwer $dogsOwnersAnwer)
    {
        $dogsOwnersAnwer->update($request->all());

        return redirect()->route('admin.dogs-owners-anwers.index');
    }

    public function show(DogsOwnersAnwer $dogsOwnersAnwer)
    {
        abort_if(Gate::denies('dogs_owners_anwer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dogsOwnersAnwer->load('department', 'city');

        return view('admin.dogsOwnersAnwers.show', compact('dogsOwnersAnwer'));
    }

    public function destroy(DogsOwnersAnwer $dogsOwnersAnwer)
    {
        abort_if(Gate::denies('dogs_owners_anwer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dogsOwnersAnwer->delete();

        return back();
    }

    public function massDestroy(MassDestroyDogsOwnersAnwerRequest $request)
    {
        DogsOwnersAnwer::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
