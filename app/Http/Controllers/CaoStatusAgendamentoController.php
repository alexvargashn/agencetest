<?php

namespace App\Http\Controllers;

use App\Models\CaoStatusAgendamento;
use Illuminate\Http\Request;

/**
 * Class CaoStatusAgendamentoController
 * @package App\Http\Controllers
 */
class CaoStatusAgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoStatusAgendamentos = CaoStatusAgendamento::paginate();

        return view('cao-status-agendamento.index', compact('caoStatusAgendamentos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoStatusAgendamentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoStatusAgendamento = new CaoStatusAgendamento();
        return view('cao-status-agendamento.create', compact('caoStatusAgendamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoStatusAgendamento::$rules);

        $caoStatusAgendamento = CaoStatusAgendamento::create($request->all());

        return redirect()->route('cao-status-agendamentos.index')
            ->with('success', 'CaoStatusAgendamento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoStatusAgendamento = CaoStatusAgendamento::find($id);

        return view('cao-status-agendamento.show', compact('caoStatusAgendamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoStatusAgendamento = CaoStatusAgendamento::find($id);

        return view('cao-status-agendamento.edit', compact('caoStatusAgendamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoStatusAgendamento $caoStatusAgendamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoStatusAgendamento $caoStatusAgendamento)
    {
        request()->validate(CaoStatusAgendamento::$rules);

        $caoStatusAgendamento->update($request->all());

        return redirect()->route('cao-status-agendamentos.index')
            ->with('success', 'CaoStatusAgendamento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoStatusAgendamento = CaoStatusAgendamento::find($id)->delete();

        return redirect()->route('cao-status-agendamentos.index')
            ->with('success', 'CaoStatusAgendamento deleted successfully');
    }
}
