<?php

namespace App\Http\Controllers;

use App\Models\CaoUsuario;
use Illuminate\Http\Request;

/**
 * Class CaoUsuarioController
 * @package App\Http\Controllers
 */
class CaoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoUsuarios = CaoUsuario::paginate();

        return view('cao-usuario.index', compact('caoUsuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $caoUsuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoUsuario = new CaoUsuario();
        return view('cao-usuario.create', compact('caoUsuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoUsuario::$rules);

        $caoUsuario = CaoUsuario::create($request->all());

        return redirect()->route('cao-usuarios.index')
            ->with('success', 'CaoUsuario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoUsuario = CaoUsuario::find($id);

        return view('cao-usuario.show', compact('caoUsuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoUsuario = CaoUsuario::find($id);

        return view('cao-usuario.edit', compact('caoUsuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoUsuario $caoUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoUsuario $caoUsuario)
    {
        request()->validate(CaoUsuario::$rules);

        $caoUsuario->update($request->all());

        return redirect()->route('cao-usuarios.index')
            ->with('success', 'CaoUsuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoUsuario = CaoUsuario::find($id)->delete();

        return redirect()->route('cao-usuarios.index')
            ->with('success', 'CaoUsuario deleted successfully');
    }
}
