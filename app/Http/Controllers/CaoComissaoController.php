<?php

namespace App\Http\Controllers;

use App\Models\CaoComissao;
use Illuminate\Http\Request;

/**
 * Class CaoComissaoController
 * @package App\Http\Controllers
 */
class CaoComissaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoComissaos = CaoComissao::paginate();

        return view('cao-comissao.index', compact('caoComissaos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoComissaos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoComissao = new CaoComissao();
        return view('cao-comissao.create', compact('caoComissao'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoComissao::$rules);

        $caoComissao = CaoComissao::create($request->all());

        return redirect()->route('cao-comissaos.index')
            ->with('success', 'CaoComissao created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoComissao = CaoComissao::find($id);

        return view('cao-comissao.show', compact('caoComissao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoComissao = CaoComissao::find($id);

        return view('cao-comissao.edit', compact('caoComissao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoComissao $caoComissao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoComissao $caoComissao)
    {
        request()->validate(CaoComissao::$rules);

        $caoComissao->update($request->all());

        return redirect()->route('cao-comissaos.index')
            ->with('success', 'CaoComissao updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoComissao = CaoComissao::find($id)->delete();

        return redirect()->route('cao-comissaos.index')
            ->with('success', 'CaoComissao deleted successfully');
    }
}
