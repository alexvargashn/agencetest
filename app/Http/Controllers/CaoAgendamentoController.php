<?php

namespace App\Http\Controllers;

use App\Models\CaoAgendamento;
use Illuminate\Http\Request;

/**
 * Class CaoAgendamentoController
 * @package App\Http\Controllers
 */
class CaoAgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoAgendamentos = CaoAgendamento::paginate();

        return view('cao-agendamento.index', compact('caoAgendamentos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoAgendamentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoAgendamento = new CaoAgendamento();
        return view('cao-agendamento.create', compact('caoAgendamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoAgendamento::$rules);

        $caoAgendamento = CaoAgendamento::create($request->all());

        return redirect()->route('cao-agendamentos.index')
            ->with('success', 'CaoAgendamento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoAgendamento = CaoAgendamento::find($id);

        return view('cao-agendamento.show', compact('caoAgendamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoAgendamento = CaoAgendamento::find($id);

        return view('cao-agendamento.edit', compact('caoAgendamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoAgendamento $caoAgendamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoAgendamento $caoAgendamento)
    {
        request()->validate(CaoAgendamento::$rules);

        $caoAgendamento->update($request->all());

        return redirect()->route('cao-agendamentos.index')
            ->with('success', 'CaoAgendamento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoAgendamento = CaoAgendamento::find($id)->delete();

        return redirect()->route('cao-agendamentos.index')
            ->with('success', 'CaoAgendamento deleted successfully');
    }
}
