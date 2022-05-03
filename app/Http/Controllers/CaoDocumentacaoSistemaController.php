<?php

namespace App\Http\Controllers;

use App\Models\CaoDocumentacaoSistema;
use Illuminate\Http\Request;

/**
 * Class CaoDocumentacaoSistemaController
 * @package App\Http\Controllers
 */
class CaoDocumentacaoSistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoDocumentacaoSistemas = CaoDocumentacaoSistema::paginate();

        return view('cao-documentacao-sistema.index', compact('caoDocumentacaoSistemas'))
            ->with('i', (request()->input('page', 1) - 1) * $caoDocumentacaoSistemas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoDocumentacaoSistema = new CaoDocumentacaoSistema();
        return view('cao-documentacao-sistema.create', compact('caoDocumentacaoSistema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoDocumentacaoSistema::$rules);

        $caoDocumentacaoSistema = CaoDocumentacaoSistema::create($request->all());

        return redirect()->route('cao-documentacao-sistemas.index')
            ->with('success', 'CaoDocumentacaoSistema created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoDocumentacaoSistema = CaoDocumentacaoSistema::find($id);

        return view('cao-documentacao-sistema.show', compact('caoDocumentacaoSistema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoDocumentacaoSistema = CaoDocumentacaoSistema::find($id);

        return view('cao-documentacao-sistema.edit', compact('caoDocumentacaoSistema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoDocumentacaoSistema $caoDocumentacaoSistema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoDocumentacaoSistema $caoDocumentacaoSistema)
    {
        request()->validate(CaoDocumentacaoSistema::$rules);

        $caoDocumentacaoSistema->update($request->all());

        return redirect()->route('cao-documentacao-sistemas.index')
            ->with('success', 'CaoDocumentacaoSistema updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoDocumentacaoSistema = CaoDocumentacaoSistema::find($id)->delete();

        return redirect()->route('cao-documentacao-sistemas.index')
            ->with('success', 'CaoDocumentacaoSistema deleted successfully');
    }
}
