<?php

namespace App\Http\Controllers;

use App\Models\CaoPontosConhecimento;
use Illuminate\Http\Request;

/**
 * Class CaoPontosConhecimentoController
 * @package App\Http\Controllers
 */
class CaoPontosConhecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoPontosConhecimentos = CaoPontosConhecimento::paginate();

        return view('cao-pontos-conhecimento.index', compact('caoPontosConhecimentos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoPontosConhecimentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoPontosConhecimento = new CaoPontosConhecimento();
        return view('cao-pontos-conhecimento.create', compact('caoPontosConhecimento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoPontosConhecimento::$rules);

        $caoPontosConhecimento = CaoPontosConhecimento::create($request->all());

        return redirect()->route('cao-pontos-conhecimentos.index')
            ->with('success', 'CaoPontosConhecimento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoPontosConhecimento = CaoPontosConhecimento::find($id);

        return view('cao-pontos-conhecimento.show', compact('caoPontosConhecimento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoPontosConhecimento = CaoPontosConhecimento::find($id);

        return view('cao-pontos-conhecimento.edit', compact('caoPontosConhecimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoPontosConhecimento $caoPontosConhecimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoPontosConhecimento $caoPontosConhecimento)
    {
        request()->validate(CaoPontosConhecimento::$rules);

        $caoPontosConhecimento->update($request->all());

        return redirect()->route('cao-pontos-conhecimentos.index')
            ->with('success', 'CaoPontosConhecimento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoPontosConhecimento = CaoPontosConhecimento::find($id)->delete();

        return redirect()->route('cao-pontos-conhecimentos.index')
            ->with('success', 'CaoPontosConhecimento deleted successfully');
    }
}
