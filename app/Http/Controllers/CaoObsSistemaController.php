<?php

namespace App\Http\Controllers;

use App\Models\CaoObsSistema;
use Illuminate\Http\Request;

/**
 * Class CaoObsSistemaController
 * @package App\Http\Controllers
 */
class CaoObsSistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoObsSistemas = CaoObsSistema::paginate();

        return view('cao-obs-sistema.index', compact('caoObsSistemas'))
            ->with('i', (request()->input('page', 1) - 1) * $caoObsSistemas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoObsSistema = new CaoObsSistema();
        return view('cao-obs-sistema.create', compact('caoObsSistema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoObsSistema::$rules);

        $caoObsSistema = CaoObsSistema::create($request->all());

        return redirect()->route('cao-obs-sistemas.index')
            ->with('success', 'CaoObsSistema created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoObsSistema = CaoObsSistema::find($id);

        return view('cao-obs-sistema.show', compact('caoObsSistema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoObsSistema = CaoObsSistema::find($id);

        return view('cao-obs-sistema.edit', compact('caoObsSistema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoObsSistema $caoObsSistema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoObsSistema $caoObsSistema)
    {
        request()->validate(CaoObsSistema::$rules);

        $caoObsSistema->update($request->all());

        return redirect()->route('cao-obs-sistemas.index')
            ->with('success', 'CaoObsSistema updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoObsSistema = CaoObsSistema::find($id)->delete();

        return redirect()->route('cao-obs-sistemas.index')
            ->with('success', 'CaoObsSistema deleted successfully');
    }
}
