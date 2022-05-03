<?php

namespace App\Http\Controllers;

use App\Models\CaoDiaryReport;
use Illuminate\Http\Request;

/**
 * Class CaoDiaryReportController
 * @package App\Http\Controllers
 */
class CaoDiaryReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoDiaryReports = CaoDiaryReport::paginate();

        return view('cao-diary-report.index', compact('caoDiaryReports'))
            ->with('i', (request()->input('page', 1) - 1) * $caoDiaryReports->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoDiaryReport = new CaoDiaryReport();
        return view('cao-diary-report.create', compact('caoDiaryReport'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoDiaryReport::$rules);

        $caoDiaryReport = CaoDiaryReport::create($request->all());

        return redirect()->route('cao-diary-reports.index')
            ->with('success', 'CaoDiaryReport created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoDiaryReport = CaoDiaryReport::find($id);

        return view('cao-diary-report.show', compact('caoDiaryReport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoDiaryReport = CaoDiaryReport::find($id);

        return view('cao-diary-report.edit', compact('caoDiaryReport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoDiaryReport $caoDiaryReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoDiaryReport $caoDiaryReport)
    {
        request()->validate(CaoDiaryReport::$rules);

        $caoDiaryReport->update($request->all());

        return redirect()->route('cao-diary-reports.index')
            ->with('success', 'CaoDiaryReport updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoDiaryReport = CaoDiaryReport::find($id)->delete();

        return redirect()->route('cao-diary-reports.index')
            ->with('success', 'CaoDiaryReport deleted successfully');
    }
}
