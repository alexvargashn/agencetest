<?php

namespace App\Http\Controllers;

use App\Models\CaoCategoriasOmbudsman;
use Illuminate\Http\Request;

/**
 * Class CaoCategoriasOmbudsmanController
 * @package App\Http\Controllers
 */
class CaoCategoriasOmbudsmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoCategoriasOmbudsmen = CaoCategoriasOmbudsman::paginate();

        return view('cao-categorias-ombudsman.index', compact('caoCategoriasOmbudsmen'))
            ->with('i', (request()->input('page', 1) - 1) * $caoCategoriasOmbudsmen->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoCategoriasOmbudsman = new CaoCategoriasOmbudsman();
        return view('cao-categorias-ombudsman.create', compact('caoCategoriasOmbudsman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoCategoriasOmbudsman::$rules);

        $caoCategoriasOmbudsman = CaoCategoriasOmbudsman::create($request->all());

        return redirect()->route('cao-categorias-ombudsmen.index')
            ->with('success', 'CaoCategoriasOmbudsman created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoCategoriasOmbudsman = CaoCategoriasOmbudsman::find($id);

        return view('cao-categorias-ombudsman.show', compact('caoCategoriasOmbudsman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoCategoriasOmbudsman = CaoCategoriasOmbudsman::find($id);

        return view('cao-categorias-ombudsman.edit', compact('caoCategoriasOmbudsman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoCategoriasOmbudsman $caoCategoriasOmbudsman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoCategoriasOmbudsman $caoCategoriasOmbudsman)
    {
        request()->validate(CaoCategoriasOmbudsman::$rules);

        $caoCategoriasOmbudsman->update($request->all());

        return redirect()->route('cao-categorias-ombudsmen.index')
            ->with('success', 'CaoCategoriasOmbudsman updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoCategoriasOmbudsman = CaoCategoriasOmbudsman::find($id)->delete();

        return redirect()->route('cao-categorias-ombudsmen.index')
            ->with('success', 'CaoCategoriasOmbudsman deleted successfully');
    }
}
