<?php

namespace App\Http\Controllers;

use App\Models\PermissaoSistema;
use Illuminate\Http\Request;

/**
 * Class PermissaoSistemaController
 * @package App\Http\Controllers
 */
class PermissaoSistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissaoSistemas = PermissaoSistema::paginate();

        return view('permissao-sistema.index', compact('permissaoSistemas'))
            ->with('i', (request()->input('page', 1) - 1) * $permissaoSistemas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissaoSistema = new PermissaoSistema();
        return view('permissao-sistema.create', compact('permissaoSistema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PermissaoSistema::$rules);

        $permissaoSistema = PermissaoSistema::create($request->all());

        return redirect()->route('permissao-sistemas.index')
            ->with('success', 'PermissaoSistema created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permissaoSistema = PermissaoSistema::find($id);

        return view('permissao-sistema.show', compact('permissaoSistema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permissaoSistema = PermissaoSistema::find($id);

        return view('permissao-sistema.edit', compact('permissaoSistema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PermissaoSistema $permissaoSistema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermissaoSistema $permissaoSistema)
    {
        request()->validate(PermissaoSistema::$rules);

        $permissaoSistema->update($request->all());

        return redirect()->route('permissao-sistemas.index')
            ->with('success', 'PermissaoSistema updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $permissaoSistema = PermissaoSistema::find($id)->delete();

        return redirect()->route('permissao-sistemas.index')
            ->with('success', 'PermissaoSistema deleted successfully');
    }
}
