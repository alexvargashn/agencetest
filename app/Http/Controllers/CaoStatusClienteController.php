<?php

namespace App\Http\Controllers;

use App\Models\CaoStatusCliente;
use Illuminate\Http\Request;

/**
 * Class CaoStatusClienteController
 * @package App\Http\Controllers
 */
class CaoStatusClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoStatusClientes = CaoStatusCliente::paginate();

        return view('cao-status-cliente.index', compact('caoStatusClientes'))
            ->with('i', (request()->input('page', 1) - 1) * $caoStatusClientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoStatusCliente = new CaoStatusCliente();
        return view('cao-status-cliente.create', compact('caoStatusCliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoStatusCliente::$rules);

        $caoStatusCliente = CaoStatusCliente::create($request->all());

        return redirect()->route('cao-status-clientes.index')
            ->with('success', 'CaoStatusCliente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoStatusCliente = CaoStatusCliente::find($id);

        return view('cao-status-cliente.show', compact('caoStatusCliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoStatusCliente = CaoStatusCliente::find($id);

        return view('cao-status-cliente.edit', compact('caoStatusCliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoStatusCliente $caoStatusCliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoStatusCliente $caoStatusCliente)
    {
        request()->validate(CaoStatusCliente::$rules);

        $caoStatusCliente->update($request->all());

        return redirect()->route('cao-status-clientes.index')
            ->with('success', 'CaoStatusCliente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoStatusCliente = CaoStatusCliente::find($id)->delete();

        return redirect()->route('cao-status-clientes.index')
            ->with('success', 'CaoStatusCliente deleted successfully');
    }
}
