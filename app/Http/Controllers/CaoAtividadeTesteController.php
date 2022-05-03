<?php

namespace App\Http\Controllers;

use App\Models\CaoAtividadeTeste;
use Illuminate\Http\Request;

/**
 * Class CaoAtividadeTesteController
 * @package App\Http\Controllers
 */
class CaoAtividadeTesteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoAtividadeTestes = CaoAtividadeTeste::paginate();

        return view('cao-atividade-teste.index', compact('caoAtividadeTestes'))
            ->with('i', (request()->input('page', 1) - 1) * $caoAtividadeTestes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoAtividadeTeste = new CaoAtividadeTeste();
        return view('cao-atividade-teste.create', compact('caoAtividadeTeste'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoAtividadeTeste::$rules);

        $caoAtividadeTeste = CaoAtividadeTeste::create($request->all());

        return redirect()->route('cao-atividade-testes.index')
            ->with('success', 'CaoAtividadeTeste created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoAtividadeTeste = CaoAtividadeTeste::find($id);

        return view('cao-atividade-teste.show', compact('caoAtividadeTeste'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoAtividadeTeste = CaoAtividadeTeste::find($id);

        return view('cao-atividade-teste.edit', compact('caoAtividadeTeste'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoAtividadeTeste $caoAtividadeTeste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoAtividadeTeste $caoAtividadeTeste)
    {
        request()->validate(CaoAtividadeTeste::$rules);

        $caoAtividadeTeste->update($request->all());

        return redirect()->route('cao-atividade-testes.index')
            ->with('success', 'CaoAtividadeTeste updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoAtividadeTeste = CaoAtividadeTeste::find($id)->delete();

        return redirect()->route('cao-atividade-testes.index')
            ->with('success', 'CaoAtividadeTeste deleted successfully');
    }
}
