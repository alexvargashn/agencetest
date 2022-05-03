<?php

namespace App\Http\Controllers;

use App\Models\CaoFeriado;
use Illuminate\Http\Request;

/**
 * Class CaoFeriadoController
 * @package App\Http\Controllers
 */
class CaoFeriadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoFeriados = CaoFeriado::paginate();

        return view('cao-feriado.index', compact('caoFeriados'))
            ->with('i', (request()->input('page', 1) - 1) * $caoFeriados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoFeriado = new CaoFeriado();
        return view('cao-feriado.create', compact('caoFeriado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoFeriado::$rules);

        $caoFeriado = CaoFeriado::create($request->all());

        return redirect()->route('cao-feriados.index')
            ->with('success', 'CaoFeriado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoFeriado = CaoFeriado::find($id);

        return view('cao-feriado.show', compact('caoFeriado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoFeriado = CaoFeriado::find($id);

        return view('cao-feriado.edit', compact('caoFeriado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoFeriado $caoFeriado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoFeriado $caoFeriado)
    {
        request()->validate(CaoFeriado::$rules);

        $caoFeriado->update($request->all());

        return redirect()->route('cao-feriados.index')
            ->with('success', 'CaoFeriado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoFeriado = CaoFeriado::find($id)->delete();

        return redirect()->route('cao-feriados.index')
            ->with('success', 'CaoFeriado deleted successfully');
    }
}
