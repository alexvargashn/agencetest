<?php

namespace App\Http\Controllers;

use App\Models\CaoDocumentacaoOutro;
use Illuminate\Http\Request;

/**
 * Class CaoDocumentacaoOutroController
 * @package App\Http\Controllers
 */
class CaoDocumentacaoOutroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoDocumentacaoOutros = CaoDocumentacaoOutro::paginate();

        return view('cao-documentacao-outro.index', compact('caoDocumentacaoOutros'))
            ->with('i', (request()->input('page', 1) - 1) * $caoDocumentacaoOutros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoDocumentacaoOutro = new CaoDocumentacaoOutro();
        return view('cao-documentacao-outro.create', compact('caoDocumentacaoOutro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoDocumentacaoOutro::$rules);

        $caoDocumentacaoOutro = CaoDocumentacaoOutro::create($request->all());

        return redirect()->route('cao-documentacao-outros.index')
            ->with('success', 'CaoDocumentacaoOutro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoDocumentacaoOutro = CaoDocumentacaoOutro::find($id);

        return view('cao-documentacao-outro.show', compact('caoDocumentacaoOutro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoDocumentacaoOutro = CaoDocumentacaoOutro::find($id);

        return view('cao-documentacao-outro.edit', compact('caoDocumentacaoOutro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoDocumentacaoOutro $caoDocumentacaoOutro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoDocumentacaoOutro $caoDocumentacaoOutro)
    {
        request()->validate(CaoDocumentacaoOutro::$rules);

        $caoDocumentacaoOutro->update($request->all());

        return redirect()->route('cao-documentacao-outros.index')
            ->with('success', 'CaoDocumentacaoOutro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoDocumentacaoOutro = CaoDocumentacaoOutro::find($id)->delete();

        return redirect()->route('cao-documentacao-outros.index')
            ->with('success', 'CaoDocumentacaoOutro deleted successfully');
    }
}
