<?php

namespace App\Http\Controllers;

use App\Models\CaoHelpChamado;
use Illuminate\Http\Request;

/**
 * Class CaoHelpChamadoController
 * @package App\Http\Controllers
 */
class CaoHelpChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoHelpChamados = CaoHelpChamado::paginate();

        return view('cao-help-chamado.index', compact('caoHelpChamados'))
            ->with('i', (request()->input('page', 1) - 1) * $caoHelpChamados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoHelpChamado = new CaoHelpChamado();
        return view('cao-help-chamado.create', compact('caoHelpChamado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoHelpChamado::$rules);

        $caoHelpChamado = CaoHelpChamado::create($request->all());

        return redirect()->route('cao-help-chamados.index')
            ->with('success', 'CaoHelpChamado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoHelpChamado = CaoHelpChamado::find($id);

        return view('cao-help-chamado.show', compact('caoHelpChamado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoHelpChamado = CaoHelpChamado::find($id);

        return view('cao-help-chamado.edit', compact('caoHelpChamado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoHelpChamado $caoHelpChamado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoHelpChamado $caoHelpChamado)
    {
        request()->validate(CaoHelpChamado::$rules);

        $caoHelpChamado->update($request->all());

        return redirect()->route('cao-help-chamados.index')
            ->with('success', 'CaoHelpChamado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoHelpChamado = CaoHelpChamado::find($id)->delete();

        return redirect()->route('cao-help-chamados.index')
            ->with('success', 'CaoHelpChamado deleted successfully');
    }
}
