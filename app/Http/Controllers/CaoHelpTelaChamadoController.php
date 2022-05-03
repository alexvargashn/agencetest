<?php

namespace App\Http\Controllers;

use App\Models\CaoHelpTelaChamado;
use Illuminate\Http\Request;

/**
 * Class CaoHelpTelaChamadoController
 * @package App\Http\Controllers
 */
class CaoHelpTelaChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoHelpTelaChamados = CaoHelpTelaChamado::paginate();

        return view('cao-help-tela-chamado.index', compact('caoHelpTelaChamados'))
            ->with('i', (request()->input('page', 1) - 1) * $caoHelpTelaChamados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoHelpTelaChamado = new CaoHelpTelaChamado();
        return view('cao-help-tela-chamado.create', compact('caoHelpTelaChamado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoHelpTelaChamado::$rules);

        $caoHelpTelaChamado = CaoHelpTelaChamado::create($request->all());

        return redirect()->route('cao-help-tela-chamados.index')
            ->with('success', 'CaoHelpTelaChamado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoHelpTelaChamado = CaoHelpTelaChamado::find($id);

        return view('cao-help-tela-chamado.show', compact('caoHelpTelaChamado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoHelpTelaChamado = CaoHelpTelaChamado::find($id);

        return view('cao-help-tela-chamado.edit', compact('caoHelpTelaChamado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoHelpTelaChamado $caoHelpTelaChamado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoHelpTelaChamado $caoHelpTelaChamado)
    {
        request()->validate(CaoHelpTelaChamado::$rules);

        $caoHelpTelaChamado->update($request->all());

        return redirect()->route('cao-help-tela-chamados.index')
            ->with('success', 'CaoHelpTelaChamado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoHelpTelaChamado = CaoHelpTelaChamado::find($id)->delete();

        return redirect()->route('cao-help-tela-chamados.index')
            ->with('success', 'CaoHelpTelaChamado deleted successfully');
    }
}
