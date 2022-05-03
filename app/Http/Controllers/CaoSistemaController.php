<?php

namespace App\Http\Controllers;

use App\Models\CaoSistema;
use Illuminate\Http\Request;

/**
 * Class CaoSistemaController
 * @package App\Http\Controllers
 */
class CaoSistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoSistemas = CaoSistema::paginate();

        return view('cao-sistema.index', compact('caoSistemas'))
            ->with('i', (request()->input('page', 1) - 1) * $caoSistemas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoSistema = new CaoSistema();
        return view('cao-sistema.create', compact('caoSistema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoSistema::$rules);

        $caoSistema = CaoSistema::create($request->all());

        return redirect()->route('cao-sistemas.index')
            ->with('success', 'CaoSistema created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoSistema = CaoSistema::find($id);

        return view('cao-sistema.show', compact('caoSistema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoSistema = CaoSistema::find($id);

        return view('cao-sistema.edit', compact('caoSistema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoSistema $caoSistema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoSistema $caoSistema)
    {
        request()->validate(CaoSistema::$rules);

        $caoSistema->update($request->all());

        return redirect()->route('cao-sistemas.index')
            ->with('success', 'CaoSistema updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoSistema = CaoSistema::find($id)->delete();

        return redirect()->route('cao-sistemas.index')
            ->with('success', 'CaoSistema deleted successfully');
    }
}
