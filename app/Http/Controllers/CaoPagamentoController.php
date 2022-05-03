<?php

namespace App\Http\Controllers;

use App\Models\CaoPagamento;
use Illuminate\Http\Request;

/**
 * Class CaoPagamentoController
 * @package App\Http\Controllers
 */
class CaoPagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoPagamentos = CaoPagamento::paginate();

        return view('cao-pagamento.index', compact('caoPagamentos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoPagamentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoPagamento = new CaoPagamento();
        return view('cao-pagamento.create', compact('caoPagamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoPagamento::$rules);

        $caoPagamento = CaoPagamento::create($request->all());

        return redirect()->route('cao-pagamentos.index')
            ->with('success', 'CaoPagamento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoPagamento = CaoPagamento::find($id);

        return view('cao-pagamento.show', compact('caoPagamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoPagamento = CaoPagamento::find($id);

        return view('cao-pagamento.edit', compact('caoPagamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoPagamento $caoPagamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoPagamento $caoPagamento)
    {
        request()->validate(CaoPagamento::$rules);

        $caoPagamento->update($request->all());

        return redirect()->route('cao-pagamentos.index')
            ->with('success', 'CaoPagamento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoPagamento = CaoPagamento::find($id)->delete();

        return redirect()->route('cao-pagamentos.index')
            ->with('success', 'CaoPagamento deleted successfully');
    }
}
