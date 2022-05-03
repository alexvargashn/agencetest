<?php

namespace App\Http\Controllers;

use App\Models\CaoTipoOmbudsman;
use Illuminate\Http\Request;

/**
 * Class CaoTipoOmbudsmanController
 * @package App\Http\Controllers
 */
class CaoTipoOmbudsmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoTipoOmbudsmen = CaoTipoOmbudsman::paginate();

        return view('cao-tipo-ombudsman.index', compact('caoTipoOmbudsmen'))
            ->with('i', (request()->input('page', 1) - 1) * $caoTipoOmbudsmen->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoTipoOmbudsman = new CaoTipoOmbudsman();
        return view('cao-tipo-ombudsman.create', compact('caoTipoOmbudsman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoTipoOmbudsman::$rules);

        $caoTipoOmbudsman = CaoTipoOmbudsman::create($request->all());

        return redirect()->route('cao-tipo-ombudsmen.index')
            ->with('success', 'CaoTipoOmbudsman created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoTipoOmbudsman = CaoTipoOmbudsman::find($id);

        return view('cao-tipo-ombudsman.show', compact('caoTipoOmbudsman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoTipoOmbudsman = CaoTipoOmbudsman::find($id);

        return view('cao-tipo-ombudsman.edit', compact('caoTipoOmbudsman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoTipoOmbudsman $caoTipoOmbudsman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoTipoOmbudsman $caoTipoOmbudsman)
    {
        request()->validate(CaoTipoOmbudsman::$rules);

        $caoTipoOmbudsman->update($request->all());

        return redirect()->route('cao-tipo-ombudsmen.index')
            ->with('success', 'CaoTipoOmbudsman updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoTipoOmbudsman = CaoTipoOmbudsman::find($id)->delete();

        return redirect()->route('cao-tipo-ombudsmen.index')
            ->with('success', 'CaoTipoOmbudsman deleted successfully');
    }
}
