<?php

namespace App\Http\Controllers;

use App\Models\CaoOsChamado;
use Illuminate\Http\Request;

/**
 * Class CaoOsChamadoController
 * @package App\Http\Controllers
 */
class CaoOsChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoOsChamados = CaoOsChamado::paginate();

        return view('cao-os-chamado.index', compact('caoOsChamados'))
            ->with('i', (request()->input('page', 1) - 1) * $caoOsChamados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoOsChamado = new CaoOsChamado();
        return view('cao-os-chamado.create', compact('caoOsChamado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoOsChamado::$rules);

        $caoOsChamado = CaoOsChamado::create($request->all());

        return redirect()->route('cao-os-chamados.index')
            ->with('success', 'CaoOsChamado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoOsChamado = CaoOsChamado::find($id);

        return view('cao-os-chamado.show', compact('caoOsChamado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoOsChamado = CaoOsChamado::find($id);

        return view('cao-os-chamado.edit', compact('caoOsChamado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoOsChamado $caoOsChamado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoOsChamado $caoOsChamado)
    {
        request()->validate(CaoOsChamado::$rules);

        $caoOsChamado->update($request->all());

        return redirect()->route('cao-os-chamados.index')
            ->with('success', 'CaoOsChamado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoOsChamado = CaoOsChamado::find($id)->delete();

        return redirect()->route('cao-os-chamados.index')
            ->with('success', 'CaoOsChamado deleted successfully');
    }
}
