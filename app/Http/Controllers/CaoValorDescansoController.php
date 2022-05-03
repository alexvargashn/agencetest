<?php

namespace App\Http\Controllers;

use App\Models\CaoValorDescanso;
use Illuminate\Http\Request;

/**
 * Class CaoValorDescansoController
 * @package App\Http\Controllers
 */
class CaoValorDescansoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoValorDescansos = CaoValorDescanso::paginate();

        return view('cao-valor-descanso.index', compact('caoValorDescansos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoValorDescansos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoValorDescanso = new CaoValorDescanso();
        return view('cao-valor-descanso.create', compact('caoValorDescanso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoValorDescanso::$rules);

        $caoValorDescanso = CaoValorDescanso::create($request->all());

        return redirect()->route('cao-valor-descansos.index')
            ->with('success', 'CaoValorDescanso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoValorDescanso = CaoValorDescanso::find($id);

        return view('cao-valor-descanso.show', compact('caoValorDescanso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoValorDescanso = CaoValorDescanso::find($id);

        return view('cao-valor-descanso.edit', compact('caoValorDescanso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoValorDescanso $caoValorDescanso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoValorDescanso $caoValorDescanso)
    {
        request()->validate(CaoValorDescanso::$rules);

        $caoValorDescanso->update($request->all());

        return redirect()->route('cao-valor-descansos.index')
            ->with('success', 'CaoValorDescanso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoValorDescanso = CaoValorDescanso::find($id)->delete();

        return redirect()->route('cao-valor-descansos.index')
            ->with('success', 'CaoValorDescanso deleted successfully');
    }
}
