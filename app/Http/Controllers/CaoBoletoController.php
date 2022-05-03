<?php

namespace App\Http\Controllers;

use App\Models\CaoBoleto;
use Illuminate\Http\Request;

/**
 * Class CaoBoletoController
 * @package App\Http\Controllers
 */
class CaoBoletoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoBoletos = CaoBoleto::paginate();

        return view('cao-boleto.index', compact('caoBoletos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoBoletos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoBoleto = new CaoBoleto();
        return view('cao-boleto.create', compact('caoBoleto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoBoleto::$rules);

        $caoBoleto = CaoBoleto::create($request->all());

        return redirect()->route('cao-boletos.index')
            ->with('success', 'CaoBoleto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoBoleto = CaoBoleto::find($id);

        return view('cao-boleto.show', compact('caoBoleto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoBoleto = CaoBoleto::find($id);

        return view('cao-boleto.edit', compact('caoBoleto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoBoleto $caoBoleto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoBoleto $caoBoleto)
    {
        request()->validate(CaoBoleto::$rules);

        $caoBoleto->update($request->all());

        return redirect()->route('cao-boletos.index')
            ->with('success', 'CaoBoleto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoBoleto = CaoBoleto::find($id)->delete();

        return redirect()->route('cao-boletos.index')
            ->with('success', 'CaoBoleto deleted successfully');
    }
}
