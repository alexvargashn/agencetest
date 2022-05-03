<?php

namespace App\Http\Controllers;

use App\Models\CaoAtividade;
use Illuminate\Http\Request;

/**
 * Class CaoAtividadeController
 * @package App\Http\Controllers
 */
class CaoAtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoAtividades = CaoAtividade::paginate();

        return view('cao-atividade.index', compact('caoAtividades'))
            ->with('i', (request()->input('page', 1) - 1) * $caoAtividades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoAtividade = new CaoAtividade();
        return view('cao-atividade.create', compact('caoAtividade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoAtividade::$rules);

        $caoAtividade = CaoAtividade::create($request->all());

        return redirect()->route('cao-atividades.index')
            ->with('success', 'CaoAtividade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoAtividade = CaoAtividade::find($id);

        return view('cao-atividade.show', compact('caoAtividade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoAtividade = CaoAtividade::find($id);

        return view('cao-atividade.edit', compact('caoAtividade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoAtividade $caoAtividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoAtividade $caoAtividade)
    {
        request()->validate(CaoAtividade::$rules);

        $caoAtividade->update($request->all());

        return redirect()->route('cao-atividades.index')
            ->with('success', 'CaoAtividade updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoAtividade = CaoAtividade::find($id)->delete();

        return redirect()->route('cao-atividades.index')
            ->with('success', 'CaoAtividade deleted successfully');
    }
}
