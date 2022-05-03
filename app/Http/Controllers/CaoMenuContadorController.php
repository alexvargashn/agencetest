<?php

namespace App\Http\Controllers;

use App\Models\CaoMenuContador;
use Illuminate\Http\Request;

/**
 * Class CaoMenuContadorController
 * @package App\Http\Controllers
 */
class CaoMenuContadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoMenuContadors = CaoMenuContador::paginate();

        return view('cao-menu-contador.index', compact('caoMenuContadors'))
            ->with('i', (request()->input('page', 1) - 1) * $caoMenuContadors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoMenuContador = new CaoMenuContador();
        return view('cao-menu-contador.create', compact('caoMenuContador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoMenuContador::$rules);

        $caoMenuContador = CaoMenuContador::create($request->all());

        return redirect()->route('cao-menu-contadors.index')
            ->with('success', 'CaoMenuContador created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoMenuContador = CaoMenuContador::find($id);

        return view('cao-menu-contador.show', compact('caoMenuContador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoMenuContador = CaoMenuContador::find($id);

        return view('cao-menu-contador.edit', compact('caoMenuContador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoMenuContador $caoMenuContador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoMenuContador $caoMenuContador)
    {
        request()->validate(CaoMenuContador::$rules);

        $caoMenuContador->update($request->all());

        return redirect()->route('cao-menu-contadors.index')
            ->with('success', 'CaoMenuContador updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoMenuContador = CaoMenuContador::find($id)->delete();

        return redirect()->route('cao-menu-contadors.index')
            ->with('success', 'CaoMenuContador deleted successfully');
    }
}
