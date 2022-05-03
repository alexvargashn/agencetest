<?php

namespace App\Http\Controllers;

use App\Models\CaoOsStatus;
use Illuminate\Http\Request;

/**
 * Class CaoOsStatusController
 * @package App\Http\Controllers
 */
class CaoOsStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoOsStatuses = CaoOsStatus::paginate();

        return view('cao-os-status.index', compact('caoOsStatuses'))
            ->with('i', (request()->input('page', 1) - 1) * $caoOsStatuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoOsStatus = new CaoOsStatus();
        return view('cao-os-status.create', compact('caoOsStatus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoOsStatus::$rules);

        $caoOsStatus = CaoOsStatus::create($request->all());

        return redirect()->route('cao-os-statuses.index')
            ->with('success', 'CaoOsStatus created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoOsStatus = CaoOsStatus::find($id);

        return view('cao-os-status.show', compact('caoOsStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoOsStatus = CaoOsStatus::find($id);

        return view('cao-os-status.edit', compact('caoOsStatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoOsStatus $caoOsStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoOsStatus $caoOsStatus)
    {
        request()->validate(CaoOsStatus::$rules);

        $caoOsStatus->update($request->all());

        return redirect()->route('cao-os-statuses.index')
            ->with('success', 'CaoOsStatus updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoOsStatus = CaoOsStatus::find($id)->delete();

        return redirect()->route('cao-os-statuses.index')
            ->with('success', 'CaoOsStatus deleted successfully');
    }
}
