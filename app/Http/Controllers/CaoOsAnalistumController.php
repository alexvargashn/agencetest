<?php

namespace App\Http\Controllers;

use App\Models\CaoOsAnalistum;
use Illuminate\Http\Request;

/**
 * Class CaoOsAnalistumController
 * @package App\Http\Controllers
 */
class CaoOsAnalistumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoOsAnalista = CaoOsAnalistum::paginate();

        return view('cao-os-analistum.index', compact('caoOsAnalista'))
            ->with('i', (request()->input('page', 1) - 1) * $caoOsAnalista->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoOsAnalistum = new CaoOsAnalistum();
        return view('cao-os-analistum.create', compact('caoOsAnalistum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoOsAnalistum::$rules);

        $caoOsAnalistum = CaoOsAnalistum::create($request->all());

        return redirect()->route('cao-os-analista.index')
            ->with('success', 'CaoOsAnalistum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoOsAnalistum = CaoOsAnalistum::find($id);

        return view('cao-os-analistum.show', compact('caoOsAnalistum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoOsAnalistum = CaoOsAnalistum::find($id);

        return view('cao-os-analistum.edit', compact('caoOsAnalistum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoOsAnalistum $caoOsAnalistum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoOsAnalistum $caoOsAnalistum)
    {
        request()->validate(CaoOsAnalistum::$rules);

        $caoOsAnalistum->update($request->all());

        return redirect()->route('cao-os-analista.index')
            ->with('success', 'CaoOsAnalistum updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoOsAnalistum = CaoOsAnalistum::find($id)->delete();

        return redirect()->route('cao-os-analista.index')
            ->with('success', 'CaoOsAnalistum deleted successfully');
    }
}
