<?php

namespace App\Http\Controllers;

use App\Models\CaoRamo;
use Illuminate\Http\Request;

/**
 * Class CaoRamoController
 * @package App\Http\Controllers
 */
class CaoRamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoRamos = CaoRamo::paginate();

        return view('cao-ramo.index', compact('caoRamos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoRamos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoRamo = new CaoRamo();
        return view('cao-ramo.create', compact('caoRamo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoRamo::$rules);

        $caoRamo = CaoRamo::create($request->all());

        return redirect()->route('cao-ramos.index')
            ->with('success', 'CaoRamo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoRamo = CaoRamo::find($id);

        return view('cao-ramo.show', compact('caoRamo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoRamo = CaoRamo::find($id);

        return view('cao-ramo.edit', compact('caoRamo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoRamo $caoRamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoRamo $caoRamo)
    {
        request()->validate(CaoRamo::$rules);

        $caoRamo->update($request->all());

        return redirect()->route('cao-ramos.index')
            ->with('success', 'CaoRamo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoRamo = CaoRamo::find($id)->delete();

        return redirect()->route('cao-ramos.index')
            ->with('success', 'CaoRamo deleted successfully');
    }
}
