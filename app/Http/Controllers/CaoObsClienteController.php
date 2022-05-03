<?php

namespace App\Http\Controllers;

use App\Models\CaoObsCliente;
use Illuminate\Http\Request;

/**
 * Class CaoObsClienteController
 * @package App\Http\Controllers
 */
class CaoObsClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoObsClientes = CaoObsCliente::paginate();

        return view('cao-obs-cliente.index', compact('caoObsClientes'))
            ->with('i', (request()->input('page', 1) - 1) * $caoObsClientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoObsCliente = new CaoObsCliente();
        return view('cao-obs-cliente.create', compact('caoObsCliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoObsCliente::$rules);

        $caoObsCliente = CaoObsCliente::create($request->all());

        return redirect()->route('cao-obs-clientes.index')
            ->with('success', 'CaoObsCliente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoObsCliente = CaoObsCliente::find($id);

        return view('cao-obs-cliente.show', compact('caoObsCliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoObsCliente = CaoObsCliente::find($id);

        return view('cao-obs-cliente.edit', compact('caoObsCliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoObsCliente $caoObsCliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoObsCliente $caoObsCliente)
    {
        request()->validate(CaoObsCliente::$rules);

        $caoObsCliente->update($request->all());

        return redirect()->route('cao-obs-clientes.index')
            ->with('success', 'CaoObsCliente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoObsCliente = CaoObsCliente::find($id)->delete();

        return redirect()->route('cao-obs-clientes.index')
            ->with('success', 'CaoObsCliente deleted successfully');
    }
}
