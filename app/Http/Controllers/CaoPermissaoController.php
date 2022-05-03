<?php

namespace App\Http\Controllers;

use App\Models\CaoPermissao;
use Illuminate\Http\Request;

/**
 * Class CaoPermissaoController
 * @package App\Http\Controllers
 */
class CaoPermissaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoPermissaos = CaoPermissao::paginate();

        return view('cao-permissao.index', compact('caoPermissaos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoPermissaos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoPermissao = new CaoPermissao();
        return view('cao-permissao.create', compact('caoPermissao'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoPermissao::$rules);

        $caoPermissao = CaoPermissao::create($request->all());

        return redirect()->route('cao-permissaos.index')
            ->with('success', 'CaoPermissao created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoPermissao = CaoPermissao::find($id);

        return view('cao-permissao.show', compact('caoPermissao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoPermissao = CaoPermissao::find($id);

        return view('cao-permissao.edit', compact('caoPermissao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoPermissao $caoPermissao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoPermissao $caoPermissao)
    {
        request()->validate(CaoPermissao::$rules);

        $caoPermissao->update($request->all());

        return redirect()->route('cao-permissaos.index')
            ->with('success', 'CaoPermissao updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoPermissao = CaoPermissao::find($id)->delete();

        return redirect()->route('cao-permissaos.index')
            ->with('success', 'CaoPermissao deleted successfully');
    }
}
