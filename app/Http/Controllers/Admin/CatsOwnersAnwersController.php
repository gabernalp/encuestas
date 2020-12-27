<?php

namespace App\Http\Controllers\Admin;

use App\CatsOwnersAnwer;
use App\Ciudade;
use App\Departamento;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCatsOwnersAnwerRequest;
use App\Http\Requests\StoreCatsOwnersAnwerRequest;
use App\Http\Requests\UpdateCatsOwnersAnwerRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CatsOwnersAnwersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cats_owners_anwer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $catsOwnersAnwers = CatsOwnersAnwer::with(['department', 'city'])->get();

        return view('admin.catsOwnersAnwers.index', compact('catsOwnersAnwers'));
    }

    public function create()
    {
        abort_if(Gate::denies('cats_owners_anwer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $departments = Departamento::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = Ciudade::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.catsOwnersAnwers.create', compact('departments', 'cities'));
    }

    public function store(StoreCatsOwnersAnwerRequest $request)
    {
        $catsOwnersAnwer = CatsOwnersAnwer::create($request->all());

        return redirect()->route('admin.cats-owners-anwers.index');
    }

    public function edit(CatsOwnersAnwer $catsOwnersAnwer)
    {
        abort_if(Gate::denies('cats_owners_anwer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $departments = Departamento::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = Ciudade::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $catsOwnersAnwer->load('department', 'city');

        return view('admin.catsOwnersAnwers.edit', compact('departments', 'cities', 'catsOwnersAnwer'));
    }

    public function update(UpdateCatsOwnersAnwerRequest $request, CatsOwnersAnwer $catsOwnersAnwer)
    {
        $catsOwnersAnwer->update($request->all());

        return redirect()->route('admin.cats-owners-anwers.index');
    }

    public function show(CatsOwnersAnwer $catsOwnersAnwer)
    {
        abort_if(Gate::denies('cats_owners_anwer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $catsOwnersAnwer->load('department', 'city');

        return view('admin.catsOwnersAnwers.show', compact('catsOwnersAnwer'));
    }

    public function destroy(CatsOwnersAnwer $catsOwnersAnwer)
    {
        abort_if(Gate::denies('cats_owners_anwer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $catsOwnersAnwer->delete();

        return back();
    }

    public function massDestroy(MassDestroyCatsOwnersAnwerRequest $request)
    {
        CatsOwnersAnwer::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
