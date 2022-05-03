<?php

namespace App\Http\Controllers;

use App\Models\CaoMovimentoJustificativa;
use Illuminate\Http\Request;

/**
 * Class CaoMovimentoJustificativaController
 * @package App\Http\Controllers
 */
class CaoMovimentoJustificativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoMovimentoJustificativas = CaoMovimentoJustificativa::paginate();

        return view('cao-movimento-justificativa.index', compact('caoMovimentoJustificativas'))
            ->with('i', (request()->input('page', 1) - 1) * $caoMovimentoJustificativas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoMovimentoJustificativa = new CaoMovimentoJustificativa();
        return view('cao-movimento-justificativa.create', compact('caoMovimentoJustificativa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoMovimentoJustificativa::$rules);

        $caoMovimentoJustificativa = CaoMovimentoJustificativa::create($request->all());

        return redirect()->route('cao-movimento-justificativas.index')
            ->with('success', 'CaoMovimentoJustificativa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoMovimentoJustificativa = CaoMovimentoJustificativa::find($id);

        return view('cao-movimento-justificativa.show', compact('caoMovimentoJustificativa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoMovimentoJustificativa = CaoMovimentoJustificativa::find($id);

        return view('cao-movimento-justificativa.edit', compact('caoMovimentoJustificativa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoMovimentoJustificativa $caoMovimentoJustificativa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoMovimentoJustificativa $caoMovimentoJustificativa)
    {
        request()->validate(CaoMovimentoJustificativa::$rules);

        $caoMovimentoJustificativa->update($request->all());

        return redirect()->route('cao-movimento-justificativas.index')
            ->with('success', 'CaoMovimentoJustificativa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoMovimentoJustificativa = CaoMovimentoJustificativa::find($id)->delete();

        return redirect()->route('cao-movimento-justificativas.index')
            ->with('success', 'CaoMovimentoJustificativa deleted successfully');
    }
}
