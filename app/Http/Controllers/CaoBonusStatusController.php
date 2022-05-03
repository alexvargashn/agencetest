<?php

namespace App\Http\Controllers;

use App\Models\CaoBonusStatus;
use Illuminate\Http\Request;

/**
 * Class CaoBonusStatusController
 * @package App\Http\Controllers
 */
class CaoBonusStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoBonusStatuses = CaoBonusStatus::paginate();

        return view('cao-bonus-status.index', compact('caoBonusStatuses'))
            ->with('i', (request()->input('page', 1) - 1) * $caoBonusStatuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoBonusStatus = new CaoBonusStatus();
        return view('cao-bonus-status.create', compact('caoBonusStatus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoBonusStatus::$rules);

        $caoBonusStatus = CaoBonusStatus::create($request->all());

        return redirect()->route('cao-bonus-statuses.index')
            ->with('success', 'CaoBonusStatus created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoBonusStatus = CaoBonusStatus::find($id);

        return view('cao-bonus-status.show', compact('caoBonusStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoBonusStatus = CaoBonusStatus::find($id);

        return view('cao-bonus-status.edit', compact('caoBonusStatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoBonusStatus $caoBonusStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoBonusStatus $caoBonusStatus)
    {
        request()->validate(CaoBonusStatus::$rules);

        $caoBonusStatus->update($request->all());

        return redirect()->route('cao-bonus-statuses.index')
            ->with('success', 'CaoBonusStatus updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoBonusStatus = CaoBonusStatus::find($id)->delete();

        return redirect()->route('cao-bonus-statuses.index')
            ->with('success', 'CaoBonusStatus deleted successfully');
    }
}
