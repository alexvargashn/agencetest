<?php

namespace App\Http\Controllers;

use App\Models\CaoHelpStatusChamado;
use Illuminate\Http\Request;

/**
 * Class CaoHelpStatusChamadoController
 * @package App\Http\Controllers
 */
class CaoHelpStatusChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoHelpStatusChamados = CaoHelpStatusChamado::paginate();

        return view('cao-help-status-chamado.index', compact('caoHelpStatusChamados'))
            ->with('i', (request()->input('page', 1) - 1) * $caoHelpStatusChamados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoHelpStatusChamado = new CaoHelpStatusChamado();
        return view('cao-help-status-chamado.create', compact('caoHelpStatusChamado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoHelpStatusChamado::$rules);

        $caoHelpStatusChamado = CaoHelpStatusChamado::create($request->all());

        return redirect()->route('cao-help-status-chamados.index')
            ->with('success', 'CaoHelpStatusChamado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoHelpStatusChamado = CaoHelpStatusChamado::find($id);

        return view('cao-help-status-chamado.show', compact('caoHelpStatusChamado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoHelpStatusChamado = CaoHelpStatusChamado::find($id);

        return view('cao-help-status-chamado.edit', compact('caoHelpStatusChamado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoHelpStatusChamado $caoHelpStatusChamado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoHelpStatusChamado $caoHelpStatusChamado)
    {
        request()->validate(CaoHelpStatusChamado::$rules);

        $caoHelpStatusChamado->update($request->all());

        return redirect()->route('cao-help-status-chamados.index')
            ->with('success', 'CaoHelpStatusChamado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoHelpStatusChamado = CaoHelpStatusChamado::find($id)->delete();

        return redirect()->route('cao-help-status-chamados.index')
            ->with('success', 'CaoHelpStatusChamado deleted successfully');
    }
}
