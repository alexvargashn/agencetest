<?php

namespace App\Http\Controllers;

use App\Models\CaoCliente;
use Illuminate\Http\Request;

/**
 * Class CaoClienteController
 * @package App\Http\Controllers
 */
class CaoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoClientes = CaoCliente::paginate();

        return view('cao-cliente.index', compact('caoClientes'))
            ->with('i', (request()->input('page', 1) - 1) * $caoClientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoCliente = new CaoCliente();
        return view('cao-cliente.create', compact('caoCliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoCliente::$rules);

        $caoCliente = CaoCliente::create($request->all());

        return redirect()->route('cao-clientes.index')
            ->with('success', 'CaoCliente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoCliente = CaoCliente::find($id);

        return view('cao-cliente.show', compact('caoCliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoCliente = CaoCliente::find($id);

        return view('cao-cliente.edit', compact('caoCliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoCliente $caoCliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoCliente $caoCliente)
    {
        request()->validate(CaoCliente::$rules);

        $caoCliente->update($request->all());

        return redirect()->route('cao-clientes.index')
            ->with('success', 'CaoCliente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoCliente = CaoCliente::find($id)->delete();

        return redirect()->route('cao-clientes.index')
            ->with('success', 'CaoCliente deleted successfully');
    }
}
