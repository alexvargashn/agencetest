<?php

namespace App\Http\Controllers;

use App\Models\CaoDiaryReportConsultor;
use Illuminate\Http\Request;

/**
 * Class CaoDiaryReportConsultorController
 * @package App\Http\Controllers
 */
class CaoDiaryReportConsultorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoDiaryReportConsultors = CaoDiaryReportConsultor::paginate();

        return view('cao-diary-report-consultor.index', compact('caoDiaryReportConsultors'))
            ->with('i', (request()->input('page', 1) - 1) * $caoDiaryReportConsultors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoDiaryReportConsultor = new CaoDiaryReportConsultor();
        return view('cao-diary-report-consultor.create', compact('caoDiaryReportConsultor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoDiaryReportConsultor::$rules);

        $caoDiaryReportConsultor = CaoDiaryReportConsultor::create($request->all());

        return redirect()->route('cao-diary-report-consultors.index')
            ->with('success', 'CaoDiaryReportConsultor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoDiaryReportConsultor = CaoDiaryReportConsultor::find($id);

        return view('cao-diary-report-consultor.show', compact('caoDiaryReportConsultor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoDiaryReportConsultor = CaoDiaryReportConsultor::find($id);

        return view('cao-diary-report-consultor.edit', compact('caoDiaryReportConsultor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoDiaryReportConsultor $caoDiaryReportConsultor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoDiaryReportConsultor $caoDiaryReportConsultor)
    {
        request()->validate(CaoDiaryReportConsultor::$rules);

        $caoDiaryReportConsultor->update($request->all());

        return redirect()->route('cao-diary-report-consultors.index')
            ->with('success', 'CaoDiaryReportConsultor updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoDiaryReportConsultor = CaoDiaryReportConsultor::find($id)->delete();

        return redirect()->route('cao-diary-report-consultors.index')
            ->with('success', 'CaoDiaryReportConsultor deleted successfully');
    }
}
