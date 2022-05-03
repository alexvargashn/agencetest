<?php

namespace App\Http\Controllers;

use App\Models\CaoAtividadeReport;
use Illuminate\Http\Request;

/**
 * Class CaoAtividadeReportController
 * @package App\Http\Controllers
 */
class CaoAtividadeReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoAtividadeReports = CaoAtividadeReport::paginate();

        return view('cao-atividade-report.index', compact('caoAtividadeReports'))
            ->with('i', (request()->input('page', 1) - 1) * $caoAtividadeReports->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoAtividadeReport = new CaoAtividadeReport();
        return view('cao-atividade-report.create', compact('caoAtividadeReport'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoAtividadeReport::$rules);

        $caoAtividadeReport = CaoAtividadeReport::create($request->all());

        return redirect()->route('cao-atividade-reports.index')
            ->with('success', 'CaoAtividadeReport created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoAtividadeReport = CaoAtividadeReport::find($id);

        return view('cao-atividade-report.show', compact('caoAtividadeReport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoAtividadeReport = CaoAtividadeReport::find($id);

        return view('cao-atividade-report.edit', compact('caoAtividadeReport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoAtividadeReport $caoAtividadeReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoAtividadeReport $caoAtividadeReport)
    {
        request()->validate(CaoAtividadeReport::$rules);

        $caoAtividadeReport->update($request->all());

        return redirect()->route('cao-atividade-reports.index')
            ->with('success', 'CaoAtividadeReport updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoAtividadeReport = CaoAtividadeReport::find($id)->delete();

        return redirect()->route('cao-atividade-reports.index')
            ->with('success', 'CaoAtividadeReport deleted successfully');
    }
}
