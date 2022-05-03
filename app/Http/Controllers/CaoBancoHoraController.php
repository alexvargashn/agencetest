<?php

namespace App\Http\Controllers;

use App\Models\CaoBancoHora;
use Illuminate\Http\Request;

/**
 * Class CaoBancoHoraController
 * @package App\Http\Controllers
 */
class CaoBancoHoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoBancoHoras = CaoBancoHora::paginate();

        return view('cao-banco-hora.index', compact('caoBancoHoras'))
            ->with('i', (request()->input('page', 1) - 1) * $caoBancoHoras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoBancoHora = new CaoBancoHora();
        return view('cao-banco-hora.create', compact('caoBancoHora'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoBancoHora::$rules);

        $caoBancoHora = CaoBancoHora::create($request->all());

        return redirect()->route('cao-banco-horas.index')
            ->with('success', 'CaoBancoHora created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoBancoHora = CaoBancoHora::find($id);

        return view('cao-banco-hora.show', compact('caoBancoHora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoBancoHora = CaoBancoHora::find($id);

        return view('cao-banco-hora.edit', compact('caoBancoHora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoBancoHora $caoBancoHora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoBancoHora $caoBancoHora)
    {
        request()->validate(CaoBancoHora::$rules);

        $caoBancoHora->update($request->all());

        return redirect()->route('cao-banco-horas.index')
            ->with('success', 'CaoBancoHora updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoBancoHora = CaoBancoHora::find($id)->delete();

        return redirect()->route('cao-banco-horas.index')
            ->with('success', 'CaoBancoHora deleted successfully');
    }
}
