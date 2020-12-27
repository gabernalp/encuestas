<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyPrizeCodeRequest;
use App\Http\Requests\StorePrizeCodeRequest;
use App\Http\Requests\UpdatePrizeCodeRequest;
use App\PrizeCode;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PrizeCodesController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('prize_code_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = PrizeCode::query()->select(sprintf('%s.*', (new PrizeCode)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'prize_code_show';
                $editGate      = 'prize_code_edit';
                $deleteGate    = 'prize_code_delete';
                $crudRoutePart = 'prize-codes';

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
            $table->editColumn('code', function ($row) {
                return $row->code ? $row->code : "";
            });
            $table->editColumn('poll_name', function ($row) {
                return $row->poll_name ? $row->poll_name : "";
            });
            $table->editColumn('contestant', function ($row) {
                return $row->contestant ? $row->contestant : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.prizeCodes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('prize_code_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.prizeCodes.create');
    }

    public function store(StorePrizeCodeRequest $request)
    {
        $prizeCode = PrizeCode::create($request->all());

        return redirect()->route('admin.prize-codes.index');
    }

    public function edit(PrizeCode $prizeCode)
    {
        abort_if(Gate::denies('prize_code_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.prizeCodes.edit', compact('prizeCode'));
    }

    public function update(UpdatePrizeCodeRequest $request, PrizeCode $prizeCode)
    {
        $prizeCode->update($request->all());

        return redirect()->route('admin.prize-codes.index');
    }

    public function show(PrizeCode $prizeCode)
    {
        abort_if(Gate::denies('prize_code_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.prizeCodes.show', compact('prizeCode'));
    }

    public function destroy(PrizeCode $prizeCode)
    {
        abort_if(Gate::denies('prize_code_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $prizeCode->delete();

        return back();
    }

    public function massDestroy(MassDestroyPrizeCodeRequest $request)
    {
        PrizeCode::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
