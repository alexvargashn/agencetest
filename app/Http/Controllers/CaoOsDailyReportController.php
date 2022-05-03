<?php

namespace App\Http\Controllers;

use App\Models\CaoOsDailyReport;
use Illuminate\Http\Request;

/**
 * Class CaoOsDailyReportController
 * @package App\Http\Controllers
 */
class CaoOsDailyReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoOsDailyReports = CaoOsDailyReport::paginate();

        return view('cao-os-daily-report.index', compact('caoOsDailyReports'))
            ->with('i', (request()->input('page', 1) - 1) * $caoOsDailyReports->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoOsDailyReport = new CaoOsDailyReport();
        return view('cao-os-daily-report.create', compact('caoOsDailyReport'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoOsDailyReport::$rules);

        $caoOsDailyReport = CaoOsDailyReport::create($request->all());

        return redirect()->route('cao-os-daily-reports.index')
            ->with('success', 'CaoOsDailyReport created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoOsDailyReport = CaoOsDailyReport::find($id);

        return view('cao-os-daily-report.show', compact('caoOsDailyReport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoOsDailyReport = CaoOsDailyReport::find($id);

        return view('cao-os-daily-report.edit', compact('caoOsDailyReport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoOsDailyReport $caoOsDailyReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoOsDailyReport $caoOsDailyReport)
    {
        request()->validate(CaoOsDailyReport::$rules);

        $caoOsDailyReport->update($request->all());

        return redirect()->route('cao-os-daily-reports.index')
            ->with('success', 'CaoOsDailyReport updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoOsDailyReport = CaoOsDailyReport::find($id)->delete();

        return redirect()->route('cao-os-daily-reports.index')
            ->with('success', 'CaoOsDailyReport deleted successfully');
    }
}
