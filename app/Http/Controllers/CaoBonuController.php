<?php

namespace App\Http\Controllers;

use App\Models\CaoBonu;
use Illuminate\Http\Request;

/**
 * Class CaoBonuController
 * @package App\Http\Controllers
 */
class CaoBonuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoBonus = CaoBonu::paginate();

        return view('cao-bonu.index', compact('caoBonus'))
            ->with('i', (request()->input('page', 1) - 1) * $caoBonus->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoBonu = new CaoBonu();
        return view('cao-bonu.create', compact('caoBonu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoBonu::$rules);

        $caoBonu = CaoBonu::create($request->all());

        return redirect()->route('cao-bonus.index')
            ->with('success', 'CaoBonu created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoBonu = CaoBonu::find($id);

        return view('cao-bonu.show', compact('caoBonu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoBonu = CaoBonu::find($id);

        return view('cao-bonu.edit', compact('caoBonu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoBonu $caoBonu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoBonu $caoBonu)
    {
        request()->validate(CaoBonu::$rules);

        $caoBonu->update($request->all());

        return redirect()->route('cao-bonus.index')
            ->with('success', 'CaoBonu updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoBonu = CaoBonu::find($id)->delete();

        return redirect()->route('cao-bonus.index')
            ->with('success', 'CaoBonu deleted successfully');
    }
}
