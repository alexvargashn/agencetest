<?php

namespace App\Http\Controllers;

use App\Models\CaoStatusClienteComplemento;
use Illuminate\Http\Request;

/**
 * Class CaoStatusClienteComplementoController
 * @package App\Http\Controllers
 */
class CaoStatusClienteComplementoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoStatusClienteComplementos = CaoStatusClienteComplemento::paginate();

        return view('cao-status-cliente-complemento.index', compact('caoStatusClienteComplementos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoStatusClienteComplementos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoStatusClienteComplemento = new CaoStatusClienteComplemento();
        return view('cao-status-cliente-complemento.create', compact('caoStatusClienteComplemento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoStatusClienteComplemento::$rules);

        $caoStatusClienteComplemento = CaoStatusClienteComplemento::create($request->all());

        return redirect()->route('cao-status-cliente-complementos.index')
            ->with('success', 'CaoStatusClienteComplemento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoStatusClienteComplemento = CaoStatusClienteComplemento::find($id);

        return view('cao-status-cliente-complemento.show', compact('caoStatusClienteComplemento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoStatusClienteComplemento = CaoStatusClienteComplemento::find($id);

        return view('cao-status-cliente-complemento.edit', compact('caoStatusClienteComplemento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoStatusClienteComplemento $caoStatusClienteComplemento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoStatusClienteComplemento $caoStatusClienteComplemento)
    {
        request()->validate(CaoStatusClienteComplemento::$rules);

        $caoStatusClienteComplemento->update($request->all());

        return redirect()->route('cao-status-cliente-complementos.index')
            ->with('success', 'CaoStatusClienteComplemento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoStatusClienteComplemento = CaoStatusClienteComplemento::find($id)->delete();

        return redirect()->route('cao-status-cliente-complementos.index')
            ->with('success', 'CaoStatusClienteComplemento deleted successfully');
    }
}
