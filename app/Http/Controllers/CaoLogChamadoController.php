<?php

namespace App\Http\Controllers;

use App\Models\CaoLogChamado;
use Illuminate\Http\Request;

/**
 * Class CaoLogChamadoController
 * @package App\Http\Controllers
 */
class CaoLogChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoLogChamados = CaoLogChamado::paginate();

        return view('cao-log-chamado.index', compact('caoLogChamados'))
            ->with('i', (request()->input('page', 1) - 1) * $caoLogChamados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoLogChamado = new CaoLogChamado();
        return view('cao-log-chamado.create', compact('caoLogChamado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoLogChamado::$rules);

        $caoLogChamado = CaoLogChamado::create($request->all());

        return redirect()->route('cao-log-chamados.index')
            ->with('success', 'CaoLogChamado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoLogChamado = CaoLogChamado::find($id);

        return view('cao-log-chamado.show', compact('caoLogChamado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoLogChamado = CaoLogChamado::find($id);

        return view('cao-log-chamado.edit', compact('caoLogChamado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoLogChamado $caoLogChamado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoLogChamado $caoLogChamado)
    {
        request()->validate(CaoLogChamado::$rules);

        $caoLogChamado->update($request->all());

        return redirect()->route('cao-log-chamados.index')
            ->with('success', 'CaoLogChamado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoLogChamado = CaoLogChamado::find($id)->delete();

        return redirect()->route('cao-log-chamados.index')
            ->with('success', 'CaoLogChamado deleted successfully');
    }
}
