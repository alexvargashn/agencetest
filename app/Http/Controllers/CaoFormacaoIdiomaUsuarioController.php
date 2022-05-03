<?php

namespace App\Http\Controllers;

use App\Models\CaoFormacaoIdiomaUsuario;
use Illuminate\Http\Request;

/**
 * Class CaoFormacaoIdiomaUsuarioController
 * @package App\Http\Controllers
 */
class CaoFormacaoIdiomaUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoFormacaoIdiomaUsuarios = CaoFormacaoIdiomaUsuario::paginate();

        return view('cao-formacao-idioma-usuario.index', compact('caoFormacaoIdiomaUsuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $caoFormacaoIdiomaUsuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoFormacaoIdiomaUsuario = new CaoFormacaoIdiomaUsuario();
        return view('cao-formacao-idioma-usuario.create', compact('caoFormacaoIdiomaUsuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoFormacaoIdiomaUsuario::$rules);

        $caoFormacaoIdiomaUsuario = CaoFormacaoIdiomaUsuario::create($request->all());

        return redirect()->route('cao-formacao-idioma-usuarios.index')
            ->with('success', 'CaoFormacaoIdiomaUsuario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoFormacaoIdiomaUsuario = CaoFormacaoIdiomaUsuario::find($id);

        return view('cao-formacao-idioma-usuario.show', compact('caoFormacaoIdiomaUsuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoFormacaoIdiomaUsuario = CaoFormacaoIdiomaUsuario::find($id);

        return view('cao-formacao-idioma-usuario.edit', compact('caoFormacaoIdiomaUsuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoFormacaoIdiomaUsuario $caoFormacaoIdiomaUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoFormacaoIdiomaUsuario $caoFormacaoIdiomaUsuario)
    {
        request()->validate(CaoFormacaoIdiomaUsuario::$rules);

        $caoFormacaoIdiomaUsuario->update($request->all());

        return redirect()->route('cao-formacao-idioma-usuarios.index')
            ->with('success', 'CaoFormacaoIdiomaUsuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoFormacaoIdiomaUsuario = CaoFormacaoIdiomaUsuario::find($id)->delete();

        return redirect()->route('cao-formacao-idioma-usuarios.index')
            ->with('success', 'CaoFormacaoIdiomaUsuario deleted successfully');
    }
}
