<?php

namespace App\Http\Controllers;

use App\Models\CaoOsObsChamado;
use Illuminate\Http\Request;

/**
 * Class CaoOsObsChamadoController
 * @package App\Http\Controllers
 */
class CaoOsObsChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoOsObsChamados = CaoOsObsChamado::paginate();

        return view('cao-os-obs-chamado.index', compact('caoOsObsChamados'))
            ->with('i', (request()->input('page', 1) - 1) * $caoOsObsChamados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoOsObsChamado = new CaoOsObsChamado();
        return view('cao-os-obs-chamado.create', compact('caoOsObsChamado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoOsObsChamado::$rules);

        $caoOsObsChamado = CaoOsObsChamado::create($request->all());

        return redirect()->route('cao-os-obs-chamados.index')
            ->with('success', 'CaoOsObsChamado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoOsObsChamado = CaoOsObsChamado::find($id);

        return view('cao-os-obs-chamado.show', compact('caoOsObsChamado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoOsObsChamado = CaoOsObsChamado::find($id);

        return view('cao-os-obs-chamado.edit', compact('caoOsObsChamado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoOsObsChamado $caoOsObsChamado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoOsObsChamado $caoOsObsChamado)
    {
        request()->validate(CaoOsObsChamado::$rules);

        $caoOsObsChamado->update($request->all());

        return redirect()->route('cao-os-obs-chamados.index')
            ->with('success', 'CaoOsObsChamado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoOsObsChamado = CaoOsObsChamado::find($id)->delete();

        return redirect()->route('cao-os-obs-chamados.index')
            ->with('success', 'CaoOsObsChamado deleted successfully');
    }
}
