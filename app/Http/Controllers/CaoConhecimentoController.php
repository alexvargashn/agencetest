<?php

namespace App\Http\Controllers;

use App\Models\CaoConhecimento;
use Illuminate\Http\Request;

/**
 * Class CaoConhecimentoController
 * @package App\Http\Controllers
 */
class CaoConhecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoConhecimentos = CaoConhecimento::paginate();

        return view('cao-conhecimento.index', compact('caoConhecimentos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoConhecimentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoConhecimento = new CaoConhecimento();
        return view('cao-conhecimento.create', compact('caoConhecimento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoConhecimento::$rules);

        $caoConhecimento = CaoConhecimento::create($request->all());

        return redirect()->route('cao-conhecimentos.index')
            ->with('success', 'CaoConhecimento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoConhecimento = CaoConhecimento::find($id);

        return view('cao-conhecimento.show', compact('caoConhecimento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoConhecimento = CaoConhecimento::find($id);

        return view('cao-conhecimento.edit', compact('caoConhecimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoConhecimento $caoConhecimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoConhecimento $caoConhecimento)
    {
        request()->validate(CaoConhecimento::$rules);

        $caoConhecimento->update($request->all());

        return redirect()->route('cao-conhecimentos.index')
            ->with('success', 'CaoConhecimento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoConhecimento = CaoConhecimento::find($id)->delete();

        return redirect()->route('cao-conhecimentos.index')
            ->with('success', 'CaoConhecimento deleted successfully');
    }
}
