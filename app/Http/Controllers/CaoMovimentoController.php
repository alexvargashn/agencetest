<?php

namespace App\Http\Controllers;

use App\Models\CaoMovimento;
use Illuminate\Http\Request;

/**
 * Class CaoMovimentoController
 * @package App\Http\Controllers
 */
class CaoMovimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoMovimentos = CaoMovimento::paginate();

        return view('cao-movimento.index', compact('caoMovimentos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoMovimentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoMovimento = new CaoMovimento();
        return view('cao-movimento.create', compact('caoMovimento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoMovimento::$rules);

        $caoMovimento = CaoMovimento::create($request->all());

        return redirect()->route('cao-movimentos.index')
            ->with('success', 'CaoMovimento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoMovimento = CaoMovimento::find($id);

        return view('cao-movimento.show', compact('caoMovimento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoMovimento = CaoMovimento::find($id);

        return view('cao-movimento.edit', compact('caoMovimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoMovimento $caoMovimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoMovimento $caoMovimento)
    {
        request()->validate(CaoMovimento::$rules);

        $caoMovimento->update($request->all());

        return redirect()->route('cao-movimentos.index')
            ->with('success', 'CaoMovimento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoMovimento = CaoMovimento::find($id)->delete();

        return redirect()->route('cao-movimentos.index')
            ->with('success', 'CaoMovimento deleted successfully');
    }
}
