<?php

namespace App\Http\Controllers;

use App\Models\CaoTipoConhecimentoUsuario;
use Illuminate\Http\Request;

/**
 * Class CaoTipoConhecimentoUsuarioController
 * @package App\Http\Controllers
 */
class CaoTipoConhecimentoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoTipoConhecimentoUsuarios = CaoTipoConhecimentoUsuario::paginate();

        return view('cao-tipo-conhecimento-usuario.index', compact('caoTipoConhecimentoUsuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $caoTipoConhecimentoUsuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoTipoConhecimentoUsuario = new CaoTipoConhecimentoUsuario();
        return view('cao-tipo-conhecimento-usuario.create', compact('caoTipoConhecimentoUsuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoTipoConhecimentoUsuario::$rules);

        $caoTipoConhecimentoUsuario = CaoTipoConhecimentoUsuario::create($request->all());

        return redirect()->route('cao-tipo-conhecimento-usuarios.index')
            ->with('success', 'CaoTipoConhecimentoUsuario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoTipoConhecimentoUsuario = CaoTipoConhecimentoUsuario::find($id);

        return view('cao-tipo-conhecimento-usuario.show', compact('caoTipoConhecimentoUsuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoTipoConhecimentoUsuario = CaoTipoConhecimentoUsuario::find($id);

        return view('cao-tipo-conhecimento-usuario.edit', compact('caoTipoConhecimentoUsuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoTipoConhecimentoUsuario $caoTipoConhecimentoUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoTipoConhecimentoUsuario $caoTipoConhecimentoUsuario)
    {
        request()->validate(CaoTipoConhecimentoUsuario::$rules);

        $caoTipoConhecimentoUsuario->update($request->all());

        return redirect()->route('cao-tipo-conhecimento-usuarios.index')
            ->with('success', 'CaoTipoConhecimentoUsuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoTipoConhecimentoUsuario = CaoTipoConhecimentoUsuario::find($id)->delete();

        return redirect()->route('cao-tipo-conhecimento-usuarios.index')
            ->with('success', 'CaoTipoConhecimentoUsuario deleted successfully');
    }
}
