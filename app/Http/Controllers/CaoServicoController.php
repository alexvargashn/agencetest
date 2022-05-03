<?php

namespace App\Http\Controllers;

use App\Models\CaoServico;
use Illuminate\Http\Request;

/**
 * Class CaoServicoController
 * @package App\Http\Controllers
 */
class CaoServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoServicos = CaoServico::paginate();

        return view('cao-servico.index', compact('caoServicos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoServicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoServico = new CaoServico();
        return view('cao-servico.create', compact('caoServico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoServico::$rules);

        $caoServico = CaoServico::create($request->all());

        return redirect()->route('cao-servicos.index')
            ->with('success', 'CaoServico created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoServico = CaoServico::find($id);

        return view('cao-servico.show', compact('caoServico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoServico = CaoServico::find($id);

        return view('cao-servico.edit', compact('caoServico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoServico $caoServico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoServico $caoServico)
    {
        request()->validate(CaoServico::$rules);

        $caoServico->update($request->all());

        return redirect()->route('cao-servicos.index')
            ->with('success', 'CaoServico updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoServico = CaoServico::find($id)->delete();

        return redirect()->route('cao-servicos.index')
            ->with('success', 'CaoServico deleted successfully');
    }
}
