<?php

namespace App\Http\Controllers;

use App\Models\CaoBancoDeHora;
use Illuminate\Http\Request;

/**
 * Class CaoBancoDeHoraController
 * @package App\Http\Controllers
 */
class CaoBancoDeHoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoBancoDeHoras = CaoBancoDeHora::paginate();

        return view('cao-banco-de-hora.index', compact('caoBancoDeHoras'))
            ->with('i', (request()->input('page', 1) - 1) * $caoBancoDeHoras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoBancoDeHora = new CaoBancoDeHora();
        return view('cao-banco-de-hora.create', compact('caoBancoDeHora'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoBancoDeHora::$rules);

        $caoBancoDeHora = CaoBancoDeHora::create($request->all());

        return redirect()->route('cao-banco-de-horas.index')
            ->with('success', 'CaoBancoDeHora created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoBancoDeHora = CaoBancoDeHora::find($id);

        return view('cao-banco-de-hora.show', compact('caoBancoDeHora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoBancoDeHora = CaoBancoDeHora::find($id);

        return view('cao-banco-de-hora.edit', compact('caoBancoDeHora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoBancoDeHora $caoBancoDeHora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoBancoDeHora $caoBancoDeHora)
    {
        request()->validate(CaoBancoDeHora::$rules);

        $caoBancoDeHora->update($request->all());

        return redirect()->route('cao-banco-de-horas.index')
            ->with('success', 'CaoBancoDeHora updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoBancoDeHora = CaoBancoDeHora::find($id)->delete();

        return redirect()->route('cao-banco-de-horas.index')
            ->with('success', 'CaoBancoDeHora deleted successfully');
    }
}
