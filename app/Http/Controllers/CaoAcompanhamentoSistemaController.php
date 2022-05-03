<?php

namespace App\Http\Controllers;

use App\Models\CaoAcompanhamentoSistema;
use Illuminate\Http\Request;

/**
 * Class CaoAcompanhamentoSistemaController
 * @package App\Http\Controllers
 */
class CaoAcompanhamentoSistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoAcompanhamentoSistemas = CaoAcompanhamentoSistema::paginate();

        return view('cao-acompanhamento-sistema.index', compact('caoAcompanhamentoSistemas'))
            ->with('i', (request()->input('page', 1) - 1) * $caoAcompanhamentoSistemas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoAcompanhamentoSistema = new CaoAcompanhamentoSistema();
        return view('cao-acompanhamento-sistema.create', compact('caoAcompanhamentoSistema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoAcompanhamentoSistema::$rules);

        $caoAcompanhamentoSistema = CaoAcompanhamentoSistema::create($request->all());

        return redirect()->route('cao-acompanhamento-sistemas.index')
            ->with('success', 'CaoAcompanhamentoSistema created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoAcompanhamentoSistema = CaoAcompanhamentoSistema::find($id);

        return view('cao-acompanhamento-sistema.show', compact('caoAcompanhamentoSistema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoAcompanhamentoSistema = CaoAcompanhamentoSistema::find($id);

        return view('cao-acompanhamento-sistema.edit', compact('caoAcompanhamentoSistema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoAcompanhamentoSistema $caoAcompanhamentoSistema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoAcompanhamentoSistema $caoAcompanhamentoSistema)
    {
        request()->validate(CaoAcompanhamentoSistema::$rules);

        $caoAcompanhamentoSistema->update($request->all());

        return redirect()->route('cao-acompanhamento-sistemas.index')
            ->with('success', 'CaoAcompanhamentoSistema updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoAcompanhamentoSistema = CaoAcompanhamentoSistema::find($id)->delete();

        return redirect()->route('cao-acompanhamento-sistemas.index')
            ->with('success', 'CaoAcompanhamentoSistema deleted successfully');
    }
}
