<?php

namespace App\Http\Controllers;

use App\Models\CaoClienteContato;
use Illuminate\Http\Request;

/**
 * Class CaoClienteContatoController
 * @package App\Http\Controllers
 */
class CaoClienteContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoClienteContatos = CaoClienteContato::paginate();

        return view('cao-cliente-contato.index', compact('caoClienteContatos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoClienteContatos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoClienteContato = new CaoClienteContato();
        return view('cao-cliente-contato.create', compact('caoClienteContato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoClienteContato::$rules);

        $caoClienteContato = CaoClienteContato::create($request->all());

        return redirect()->route('cao-cliente-contatos.index')
            ->with('success', 'CaoClienteContato created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoClienteContato = CaoClienteContato::find($id);

        return view('cao-cliente-contato.show', compact('caoClienteContato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoClienteContato = CaoClienteContato::find($id);

        return view('cao-cliente-contato.edit', compact('caoClienteContato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoClienteContato $caoClienteContato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoClienteContato $caoClienteContato)
    {
        request()->validate(CaoClienteContato::$rules);

        $caoClienteContato->update($request->all());

        return redirect()->route('cao-cliente-contatos.index')
            ->with('success', 'CaoClienteContato updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoClienteContato = CaoClienteContato::find($id)->delete();

        return redirect()->route('cao-cliente-contatos.index')
            ->with('success', 'CaoClienteContato deleted successfully');
    }
}
