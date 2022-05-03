<?php

namespace App\Http\Controllers;

use App\Models\CaoDocumentacaoCasosUso;
use Illuminate\Http\Request;

/**
 * Class CaoDocumentacaoCasosUsoController
 * @package App\Http\Controllers
 */
class CaoDocumentacaoCasosUsoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoDocumentacaoCasosUsos = CaoDocumentacaoCasosUso::paginate();

        return view('cao-documentacao-casos-uso.index', compact('caoDocumentacaoCasosUsos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoDocumentacaoCasosUsos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoDocumentacaoCasosUso = new CaoDocumentacaoCasosUso();
        return view('cao-documentacao-casos-uso.create', compact('caoDocumentacaoCasosUso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoDocumentacaoCasosUso::$rules);

        $caoDocumentacaoCasosUso = CaoDocumentacaoCasosUso::create($request->all());

        return redirect()->route('cao-documentacao-casos-usos.index')
            ->with('success', 'CaoDocumentacaoCasosUso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoDocumentacaoCasosUso = CaoDocumentacaoCasosUso::find($id);

        return view('cao-documentacao-casos-uso.show', compact('caoDocumentacaoCasosUso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoDocumentacaoCasosUso = CaoDocumentacaoCasosUso::find($id);

        return view('cao-documentacao-casos-uso.edit', compact('caoDocumentacaoCasosUso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoDocumentacaoCasosUso $caoDocumentacaoCasosUso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoDocumentacaoCasosUso $caoDocumentacaoCasosUso)
    {
        request()->validate(CaoDocumentacaoCasosUso::$rules);

        $caoDocumentacaoCasosUso->update($request->all());

        return redirect()->route('cao-documentacao-casos-usos.index')
            ->with('success', 'CaoDocumentacaoCasosUso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoDocumentacaoCasosUso = CaoDocumentacaoCasosUso::find($id)->delete();

        return redirect()->route('cao-documentacao-casos-usos.index')
            ->with('success', 'CaoDocumentacaoCasosUso deleted successfully');
    }
}
