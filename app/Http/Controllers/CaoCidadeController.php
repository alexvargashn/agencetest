<?php

namespace App\Http\Controllers;

use App\Models\CaoCidade;
use Illuminate\Http\Request;

/**
 * Class CaoCidadeController
 * @package App\Http\Controllers
 */
class CaoCidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoCidades = CaoCidade::paginate();

        return view('cao-cidade.index', compact('caoCidades'))
            ->with('i', (request()->input('page', 1) - 1) * $caoCidades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoCidade = new CaoCidade();
        return view('cao-cidade.create', compact('caoCidade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoCidade::$rules);

        $caoCidade = CaoCidade::create($request->all());

        return redirect()->route('cao-cidades.index')
            ->with('success', 'CaoCidade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoCidade = CaoCidade::find($id);

        return view('cao-cidade.show', compact('caoCidade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoCidade = CaoCidade::find($id);

        return view('cao-cidade.edit', compact('caoCidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoCidade $caoCidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoCidade $caoCidade)
    {
        request()->validate(CaoCidade::$rules);

        $caoCidade->update($request->all());

        return redirect()->route('cao-cidades.index')
            ->with('success', 'CaoCidade updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoCidade = CaoCidade::find($id)->delete();

        return redirect()->route('cao-cidades.index')
            ->with('success', 'CaoCidade deleted successfully');
    }
}
