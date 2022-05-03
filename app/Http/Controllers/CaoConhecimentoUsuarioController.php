<?php

namespace App\Http\Controllers;

use App\Models\CaoConhecimentoUsuario;
use Illuminate\Http\Request;

/**
 * Class CaoConhecimentoUsuarioController
 * @package App\Http\Controllers
 */
class CaoConhecimentoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoConhecimentoUsuarios = CaoConhecimentoUsuario::paginate();

        return view('cao-conhecimento-usuario.index', compact('caoConhecimentoUsuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $caoConhecimentoUsuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoConhecimentoUsuario = new CaoConhecimentoUsuario();
        return view('cao-conhecimento-usuario.create', compact('caoConhecimentoUsuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoConhecimentoUsuario::$rules);

        $caoConhecimentoUsuario = CaoConhecimentoUsuario::create($request->all());

        return redirect()->route('cao-conhecimento-usuarios.index')
            ->with('success', 'CaoConhecimentoUsuario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoConhecimentoUsuario = CaoConhecimentoUsuario::find($id);

        return view('cao-conhecimento-usuario.show', compact('caoConhecimentoUsuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoConhecimentoUsuario = CaoConhecimentoUsuario::find($id);

        return view('cao-conhecimento-usuario.edit', compact('caoConhecimentoUsuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoConhecimentoUsuario $caoConhecimentoUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoConhecimentoUsuario $caoConhecimentoUsuario)
    {
        request()->validate(CaoConhecimentoUsuario::$rules);

        $caoConhecimentoUsuario->update($request->all());

        return redirect()->route('cao-conhecimento-usuarios.index')
            ->with('success', 'CaoConhecimentoUsuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoConhecimentoUsuario = CaoConhecimentoUsuario::find($id)->delete();

        return redirect()->route('cao-conhecimento-usuarios.index')
            ->with('success', 'CaoConhecimentoUsuario deleted successfully');
    }
}
