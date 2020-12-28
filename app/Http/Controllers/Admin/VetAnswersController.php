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
use Yajra\DataTables\Facades\DataTables;

class VetAnswersController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('vet_answer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = VetAnswer::with(['department', 'city'])->select(sprintf('%s.*', (new VetAnswer)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'vet_answer_show';
                $editGate      = 'vet_answer_edit';
                $deleteGate    = 'vet_answer_delete';
                $crudRoutePart = 'vet-answers';

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
            $table->editColumn('vet_clinic', function ($row) {
                return $row->vet_clinic ? $row->vet_clinic : "";
            });
            $table->editColumn('vet_university', function ($row) {
                return $row->vet_university ? $row->vet_university : "";
            });
            $table->editColumn('pet_shelters', function ($row) {
                return $row->pet_shelters ? $row->pet_shelters : "";
            });
            $table->addColumn('department_name', function ($row) {
                return $row->department ? $row->department->name : '';
            });

            $table->addColumn('city_name', function ($row) {
                return $row->city ? $row->city->name : '';
            });

            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : "";
            });
            $table->editColumn('pet_nutrition_question', function ($row) {
                return $row->pet_nutrition_question ? VetAnswer::PET_NUTRITION_QUESTION_RADIO[$row->pet_nutrition_question] : '';
            });
            $table->editColumn('recomendations_applied', function ($row) {
                return $row->recomendations_applied ? $row->recomendations_applied : "";
            });
            $table->editColumn('percent_apply_diet', function ($row) {
                return $row->percent_apply_diet ? VetAnswer::PERCENT_APPLY_DIET_RADIO[$row->percent_apply_diet] : '';
            });
            $table->editColumn('difficulty_change_food_owners', function ($row) {
                return $row->difficulty_change_food_owners ? $row->difficulty_change_food_owners : "";
            });
            $table->editColumn('obesity_5', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->obesity_5 ? 'checked' : null) . '>';
            });
            $table->editColumn('malnutrition_5', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->malnutrition_5 ? 'checked' : null) . '>';
            });
            $table->editColumn('allergies_5', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->allergies_5 ? 'checked' : null) . '>';
            });
            $table->editColumn('gastritis_5', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->gastritis_5 ? 'checked' : null) . '>';
            });
            $table->editColumn('diarrhea_5', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->diarrhea_5 ? 'checked' : null) . '>';
            });
            $table->editColumn('periodontal_5', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->periodontal_5 ? 'checked' : null) . '>';
            });
            $table->editColumn('other_disease_5', function ($row) {
                return $row->other_disease_5 ? $row->other_disease_5 : "";
            });
            $table->editColumn('other_5', function ($row) {
                return $row->other_5 ? $row->other_5 : "";
            });
            $table->editColumn('mix_food_6', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->mix_food_6 ? 'checked' : null) . '>';
            });
            $table->editColumn('food_outtime', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->food_outtime ? 'checked' : null) . '>';
            });
            $table->editColumn('water_not_enough', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->water_not_enough ? 'checked' : null) . '>';
            });
            $table->editColumn('quantities_control', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->quantities_control ? 'checked' : null) . '>';
            });
            $table->editColumn('plate_higiene', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->plate_higiene ? 'checked' : null) . '>';
            });
            $table->editColumn('other_bad_habit', function ($row) {
                return $row->other_bad_habit ? $row->other_bad_habit : "";
            });
            $table->editColumn('other_6', function ($row) {
                return $row->other_6 ? $row->other_6 : "";
            });
            $table->editColumn('food_type_recommendation', function ($row) {
                return $row->food_type_recommendation ? VetAnswer::FOOD_TYPE_RECOMMENDATION_RADIO[$row->food_type_recommendation] : '';
            });
            $table->editColumn('food_recomendation_concentrates', function ($row) {
                return $row->food_recomendation_concentrates ? VetAnswer::FOOD_RECOMENDATION_CONCENTRATES_RADIO[$row->food_recomendation_concentrates] : '';
            });
            $table->editColumn('percent_calories_concentrates', function ($row) {
                return $row->percent_calories_concentrates ? VetAnswer::PERCENT_CALORIES_CONCENTRATES_RADIO[$row->percent_calories_concentrates] : '';
            });
            $table->editColumn('country_best_food', function ($row) {
                return $row->country_best_food ? $row->country_best_food : "";
            });
            $table->editColumn('if_us_best_food', function ($row) {
                return $row->if_us_best_food ? VetAnswer::IF_US_BEST_FOOD_RADIO[$row->if_us_best_food] : '';
            });
            $table->editColumn('other_11', function ($row) {
                return $row->other_11 ? $row->other_11 : "";
            });
            $table->editColumn('not_recommended_food', function ($row) {
                return $row->not_recommended_food ? $row->not_recommended_food : "";
            });
            $table->editColumn('frecuency_education', function ($row) {
                return $row->frecuency_education ? VetAnswer::FRECUENCY_EDUCATION_RADIO[$row->frecuency_education] : '';
            });
            $table->editColumn('heard_about_pfi', function ($row) {
                return $row->heard_about_pfi ? VetAnswer::HEARD_ABOUT_PFI_RADIO[$row->heard_about_pfi] : '';
            });
            $table->editColumn('ip', function ($row) {
                return $row->ip ? $row->ip : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'department', 'city', 'obesity_5', 'malnutrition_5', 'allergies_5', 'gastritis_5', 'diarrhea_5', 'periodontal_5', 'mix_food_6', 'food_outtime', 'water_not_enough', 'quantities_control', 'plate_higiene']);

            return $table->make(true);
        }

        return view('admin.vetAnswers.index');
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
