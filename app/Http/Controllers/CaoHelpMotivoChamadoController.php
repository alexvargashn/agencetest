<?php

namespace App\Http\Controllers;

use App\Models\CaoHelpMotivoChamado;
use Illuminate\Http\Request;

/**
 * Class CaoHelpMotivoChamadoController
 * @package App\Http\Controllers
 */
class CaoHelpMotivoChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoHelpMotivoChamados = CaoHelpMotivoChamado::paginate();

        return view('cao-help-motivo-chamado.index', compact('caoHelpMotivoChamados'))
            ->with('i', (request()->input('page', 1) - 1) * $caoHelpMotivoChamados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoHelpMotivoChamado = new CaoHelpMotivoChamado();
        return view('cao-help-motivo-chamado.create', compact('caoHelpMotivoChamado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoHelpMotivoChamado::$rules);

        $caoHelpMotivoChamado = CaoHelpMotivoChamado::create($request->all());

        return redirect()->route('cao-help-motivo-chamados.index')
            ->with('success', 'CaoHelpMotivoChamado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoHelpMotivoChamado = CaoHelpMotivoChamado::find($id);

        return view('cao-help-motivo-chamado.show', compact('caoHelpMotivoChamado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoHelpMotivoChamado = CaoHelpMotivoChamado::find($id);

        return view('cao-help-motivo-chamado.edit', compact('caoHelpMotivoChamado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoHelpMotivoChamado $caoHelpMotivoChamado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoHelpMotivoChamado $caoHelpMotivoChamado)
    {
        request()->validate(CaoHelpMotivoChamado::$rules);

        $caoHelpMotivoChamado->update($request->all());

        return redirect()->route('cao-help-motivo-chamados.index')
            ->with('success', 'CaoHelpMotivoChamado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoHelpMotivoChamado = CaoHelpMotivoChamado::find($id)->delete();

        return redirect()->route('cao-help-motivo-chamados.index')
            ->with('success', 'CaoHelpMotivoChamado deleted successfully');
    }
}
