<?php

namespace App\Http\Controllers;

use App\Models\CaoTipoSistemaUsuario;
use Illuminate\Http\Request;

/**
 * Class CaoTipoSistemaUsuarioController
 * @package App\Http\Controllers
 */
class CaoTipoSistemaUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoTipoSistemaUsuarios = CaoTipoSistemaUsuario::paginate();

        return view('cao-tipo-sistema-usuario.index', compact('caoTipoSistemaUsuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $caoTipoSistemaUsuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoTipoSistemaUsuario = new CaoTipoSistemaUsuario();
        return view('cao-tipo-sistema-usuario.create', compact('caoTipoSistemaUsuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoTipoSistemaUsuario::$rules);

        $caoTipoSistemaUsuario = CaoTipoSistemaUsuario::create($request->all());

        return redirect()->route('cao-tipo-sistema-usuarios.index')
            ->with('success', 'CaoTipoSistemaUsuario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoTipoSistemaUsuario = CaoTipoSistemaUsuario::find($id);

        return view('cao-tipo-sistema-usuario.show', compact('caoTipoSistemaUsuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoTipoSistemaUsuario = CaoTipoSistemaUsuario::find($id);

        return view('cao-tipo-sistema-usuario.edit', compact('caoTipoSistemaUsuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoTipoSistemaUsuario $caoTipoSistemaUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoTipoSistemaUsuario $caoTipoSistemaUsuario)
    {
        request()->validate(CaoTipoSistemaUsuario::$rules);

        $caoTipoSistemaUsuario->update($request->all());

        return redirect()->route('cao-tipo-sistema-usuarios.index')
            ->with('success', 'CaoTipoSistemaUsuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoTipoSistemaUsuario = CaoTipoSistemaUsuario::find($id)->delete();

        return redirect()->route('cao-tipo-sistema-usuarios.index')
            ->with('success', 'CaoTipoSistemaUsuario deleted successfully');
    }
}
