<?php

namespace App\Http\Controllers;

use App\Models\CaoFormacaoUsuario;
use Illuminate\Http\Request;

/**
 * Class CaoFormacaoUsuarioController
 * @package App\Http\Controllers
 */
class CaoFormacaoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoFormacaoUsuarios = CaoFormacaoUsuario::paginate();

        return view('cao-formacao-usuario.index', compact('caoFormacaoUsuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $caoFormacaoUsuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoFormacaoUsuario = new CaoFormacaoUsuario();
        return view('cao-formacao-usuario.create', compact('caoFormacaoUsuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoFormacaoUsuario::$rules);

        $caoFormacaoUsuario = CaoFormacaoUsuario::create($request->all());

        return redirect()->route('cao-formacao-usuarios.index')
            ->with('success', 'CaoFormacaoUsuario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoFormacaoUsuario = CaoFormacaoUsuario::find($id);

        return view('cao-formacao-usuario.show', compact('caoFormacaoUsuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoFormacaoUsuario = CaoFormacaoUsuario::find($id);

        return view('cao-formacao-usuario.edit', compact('caoFormacaoUsuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoFormacaoUsuario $caoFormacaoUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoFormacaoUsuario $caoFormacaoUsuario)
    {
        request()->validate(CaoFormacaoUsuario::$rules);

        $caoFormacaoUsuario->update($request->all());

        return redirect()->route('cao-formacao-usuarios.index')
            ->with('success', 'CaoFormacaoUsuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoFormacaoUsuario = CaoFormacaoUsuario::find($id)->delete();

        return redirect()->route('cao-formacao-usuarios.index')
            ->with('success', 'CaoFormacaoUsuario deleted successfully');
    }
}
