<?php

namespace App\Http\Controllers;

use App\Models\CaoDrAtivComp;
use Illuminate\Http\Request;

/**
 * Class CaoDrAtivCompController
 * @package App\Http\Controllers
 */
class CaoDrAtivCompController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoDrAtivComps = CaoDrAtivComp::paginate();

        return view('cao-dr-ativ-comp.index', compact('caoDrAtivComps'))
            ->with('i', (request()->input('page', 1) - 1) * $caoDrAtivComps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoDrAtivComp = new CaoDrAtivComp();
        return view('cao-dr-ativ-comp.create', compact('caoDrAtivComp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoDrAtivComp::$rules);

        $caoDrAtivComp = CaoDrAtivComp::create($request->all());

        return redirect()->route('cao-dr-ativ-comps.index')
            ->with('success', 'CaoDrAtivComp created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoDrAtivComp = CaoDrAtivComp::find($id);

        return view('cao-dr-ativ-comp.show', compact('caoDrAtivComp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoDrAtivComp = CaoDrAtivComp::find($id);

        return view('cao-dr-ativ-comp.edit', compact('caoDrAtivComp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoDrAtivComp $caoDrAtivComp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoDrAtivComp $caoDrAtivComp)
    {
        request()->validate(CaoDrAtivComp::$rules);

        $caoDrAtivComp->update($request->all());

        return redirect()->route('cao-dr-ativ-comps.index')
            ->with('success', 'CaoDrAtivComp updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoDrAtivComp = CaoDrAtivComp::find($id)->delete();

        return redirect()->route('cao-dr-ativ-comps.index')
            ->with('success', 'CaoDrAtivComp deleted successfully');
    }
}
