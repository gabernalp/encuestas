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
use Yajra\DataTables\Facades\DataTables;

class DogsOwnersAnwersController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('dogs_owners_anwer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = DogsOwnersAnwer::with(['department', 'city'])->select(sprintf('%s.*', (new DogsOwnersAnwer)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'dogs_owners_anwer_show';
                $editGate      = 'dogs_owners_anwer_edit';
                $deleteGate    = 'dogs_owners_anwer_delete';
                $crudRoutePart = 'dogs-owners-anwers';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : "";
            });
            $table->addColumn('department_name', function ($row) {
                return $row->department ? $row->department->name : '';
            });

            $table->addColumn('city_name', function ($row) {
                return $row->city ? $row->city->name : '';
            });

            $table->editColumn('dog_appear', function ($row) {
                return $row->dog_appear ? DogsOwnersAnwer::DOG_APPEAR_RADIO[$row->dog_appear] : '';
            });
            $table->editColumn('other_1', function ($row) {
                return $row->other_1 ? $row->other_1 : "";
            });
            $table->editColumn('dog_consideration', function ($row) {
                return $row->dog_consideration ? DogsOwnersAnwer::DOG_CONSIDERATION_RADIO[$row->dog_consideration] : '';
            });
            $table->editColumn('other_2', function ($row) {
                return $row->other_2 ? $row->other_2 : "";
            });
            $table->editColumn('dog_food_advice', function ($row) {
                return $row->dog_food_advice ? DogsOwnersAnwer::DOG_FOOD_ADVICE_RADIO[$row->dog_food_advice] : '';
            });
            $table->editColumn('dog_food_choose', function ($row) {
                return $row->dog_food_choose ? DogsOwnersAnwer::DOG_FOOD_CHOOSE_RADIO[$row->dog_food_choose] : '';
            });
            $table->editColumn('other_4', function ($row) {
                return $row->other_4 ? $row->other_4 : "";
            });
            $table->editColumn('dog_diff_nutrition', function ($row) {
                return $row->dog_diff_nutrition ? DogsOwnersAnwer::DOG_DIFF_NUTRITION_RADIO[$row->dog_diff_nutrition] : '';
            });
            $table->editColumn('dog_diet_owner', function ($row) {
                return $row->dog_diet_owner ? DogsOwnersAnwer::DOG_DIET_OWNER_RADIO[$row->dog_diet_owner] : '';
            });
            $table->editColumn('dog_food_type', function ($row) {
                return $row->dog_food_type ? DogsOwnersAnwer::DOG_FOOD_TYPE_RADIO[$row->dog_food_type] : '';
            });
            $table->editColumn('diamond_naturals_8', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->diamond_naturals_8 ? 'checked' : null) . '>';
            });
            $table->editColumn('purina_8', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->purina_8 ? 'checked' : null) . '>';
            });
            $table->editColumn('hills_8', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->hills_8 ? 'checked' : null) . '>';
            });
            $table->editColumn('pedigree_8', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->pedigree_8 ? 'checked' : null) . '>';
            });
            $table->editColumn('royal_canin_8', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->royal_canin_8 ? 'checked' : null) . '>';
            });
            $table->editColumn('mars_8', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->mars_8 ? 'checked' : null) . '>';
            });
            $table->editColumn('other_8', function ($row) {
                return $row->other_8 ? $row->other_8 : "";
            });
            $table->editColumn('dog_percent_concentrate', function ($row) {
                return $row->dog_percent_concentrate ? DogsOwnersAnwer::DOG_PERCENT_CONCENTRATE_RADIO[$row->dog_percent_concentrate] : '';
            });
            $table->editColumn('dog_candies', function ($row) {
                return $row->dog_candies ? $row->dog_candies : "";
            });
            $table->editColumn('dog_change_food', function ($row) {
                return $row->dog_change_food ? $row->dog_change_food : "";
            });
            $table->editColumn('general_consultation_12', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->general_consultation_12 ? 'checked' : null) . '>';
            });
            $table->editColumn('dermatological_disease_12', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->dermatological_disease_12 ? 'checked' : null) . '>';
            });
            $table->editColumn('digestive_disease_12', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->digestive_disease_12 ? 'checked' : null) . '>';
            });
            $table->editColumn('periodontal_disease_12', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->periodontal_disease_12 ? 'checked' : null) . '>';
            });
            $table->editColumn('neuro_problems_12', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->neuro_problems_12 ? 'checked' : null) . '>';
            });
            $table->editColumn('metabolic_disease_12', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->metabolic_disease_12 ? 'checked' : null) . '>';
            });
            $table->editColumn('orthopedic_problems_12', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->orthopedic_problems_12 ? 'checked' : null) . '>';
            });
            $table->editColumn('emergency_case_12', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->emergency_case_12 ? 'checked' : null) . '>';
            });
            $table->editColumn('other_12', function ($row) {
                return $row->other_12 ? $row->other_12 : "";
            });
            $table->editColumn('dog_actual_disease', function ($row) {
                return $row->dog_actual_disease ? $row->dog_actual_disease : "";
            });
            $table->editColumn('avoid_obesity_14', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->avoid_obesity_14 ? 'checked' : null) . '>';
            });
            $table->editColumn('read_food_tags_14', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->read_food_tags_14 ? 'checked' : null) . '>';
            });
            $table->editColumn('healthy_snacks_14', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->healthy_snacks_14 ? 'checked' : null) . '>';
            });
            $table->editColumn('diets_switch_14', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->diets_switch_14 ? 'checked' : null) . '>';
            });
            $table->editColumn('food_by_grow_14', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->food_by_grow_14 ? 'checked' : null) . '>';
            });
            $table->editColumn('food_by_physical_14', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->food_by_physical_14 ? 'checked' : null) . '>';
            });
            $table->editColumn('more_info_14', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->more_info_14 ? 'checked' : null) . '>';
            });
            $table->editColumn('other_14', function ($row) {
                return $row->other_14 ? $row->other_14 : "";
            });
            $table->editColumn('heard_about_pfi', function ($row) {
                return $row->heard_about_pfi ? DogsOwnersAnwer::HEARD_ABOUT_PFI_RADIO[$row->heard_about_pfi] : '';
            });
            $table->editColumn('ip', function ($row) {
                return $row->ip ? $row->ip : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'department', 'city', 'diamond_naturals_8', 'purina_8', 'hills_8', 'pedigree_8', 'royal_canin_8', 'mars_8', 'general_consultation_12', 'dermatological_disease_12', 'digestive_disease_12', 'periodontal_disease_12', 'neuro_problems_12', 'metabolic_disease_12', 'orthopedic_problems_12', 'emergency_case_12', 'avoid_obesity_14', 'read_food_tags_14', 'healthy_snacks_14', 'diets_switch_14', 'food_by_grow_14', 'food_by_physical_14', 'more_info_14']);

            return $table->make(true);
        }

        return view('admin.dogsOwnersAnwers.index');
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
