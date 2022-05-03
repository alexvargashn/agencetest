<?php

namespace App\Http\Controllers;

use App\Models\CaoParticipacaoFuncionario;
use Illuminate\Http\Request;

/**
 * Class CaoParticipacaoFuncionarioController
 * @package App\Http\Controllers
 */
class CaoParticipacaoFuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoParticipacaoFuncionarios = CaoParticipacaoFuncionario::paginate();

        return view('cao-participacao-funcionario.index', compact('caoParticipacaoFuncionarios'))
            ->with('i', (request()->input('page', 1) - 1) * $caoParticipacaoFuncionarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoParticipacaoFuncionario = new CaoParticipacaoFuncionario();
        return view('cao-participacao-funcionario.create', compact('caoParticipacaoFuncionario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoParticipacaoFuncionario::$rules);

        $caoParticipacaoFuncionario = CaoParticipacaoFuncionario::create($request->all());

        return redirect()->route('cao-participacao-funcionarios.index')
            ->with('success', 'CaoParticipacaoFuncionario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoParticipacaoFuncionario = CaoParticipacaoFuncionario::find($id);

        return view('cao-participacao-funcionario.show', compact('caoParticipacaoFuncionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoParticipacaoFuncionario = CaoParticipacaoFuncionario::find($id);

        return view('cao-participacao-funcionario.edit', compact('caoParticipacaoFuncionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoParticipacaoFuncionario $caoParticipacaoFuncionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoParticipacaoFuncionario $caoParticipacaoFuncionario)
    {
        request()->validate(CaoParticipacaoFuncionario::$rules);

        $caoParticipacaoFuncionario->update($request->all());

        return redirect()->route('cao-participacao-funcionarios.index')
            ->with('success', 'CaoParticipacaoFuncionario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoParticipacaoFuncionario = CaoParticipacaoFuncionario::find($id)->delete();

        return redirect()->route('cao-participacao-funcionarios.index')
            ->with('success', 'CaoParticipacaoFuncionario deleted successfully');
    }
}
