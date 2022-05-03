<?php

namespace App\Http\Controllers;

use App\Models\CaoTipoIdiomaUsuario;
use Illuminate\Http\Request;

/**
 * Class CaoTipoIdiomaUsuarioController
 * @package App\Http\Controllers
 */
class CaoTipoIdiomaUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoTipoIdiomaUsuarios = CaoTipoIdiomaUsuario::paginate();

        return view('cao-tipo-idioma-usuario.index', compact('caoTipoIdiomaUsuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $caoTipoIdiomaUsuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoTipoIdiomaUsuario = new CaoTipoIdiomaUsuario();
        return view('cao-tipo-idioma-usuario.create', compact('caoTipoIdiomaUsuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoTipoIdiomaUsuario::$rules);

        $caoTipoIdiomaUsuario = CaoTipoIdiomaUsuario::create($request->all());

        return redirect()->route('cao-tipo-idioma-usuarios.index')
            ->with('success', 'CaoTipoIdiomaUsuario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoTipoIdiomaUsuario = CaoTipoIdiomaUsuario::find($id);

        return view('cao-tipo-idioma-usuario.show', compact('caoTipoIdiomaUsuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoTipoIdiomaUsuario = CaoTipoIdiomaUsuario::find($id);

        return view('cao-tipo-idioma-usuario.edit', compact('caoTipoIdiomaUsuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoTipoIdiomaUsuario $caoTipoIdiomaUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoTipoIdiomaUsuario $caoTipoIdiomaUsuario)
    {
        request()->validate(CaoTipoIdiomaUsuario::$rules);

        $caoTipoIdiomaUsuario->update($request->all());

        return redirect()->route('cao-tipo-idioma-usuarios.index')
            ->with('success', 'CaoTipoIdiomaUsuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoTipoIdiomaUsuario = CaoTipoIdiomaUsuario::find($id)->delete();

        return redirect()->route('cao-tipo-idioma-usuarios.index')
            ->with('success', 'CaoTipoIdiomaUsuario deleted successfully');
    }
}
