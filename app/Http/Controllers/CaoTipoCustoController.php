<?php

namespace App\Http\Controllers;

use App\Models\CaoTipoCusto;
use Illuminate\Http\Request;

/**
 * Class CaoTipoCustoController
 * @package App\Http\Controllers
 */
class CaoTipoCustoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoTipoCustos = CaoTipoCusto::paginate();

        return view('cao-tipo-custo.index', compact('caoTipoCustos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoTipoCustos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoTipoCusto = new CaoTipoCusto();
        return view('cao-tipo-custo.create', compact('caoTipoCusto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoTipoCusto::$rules);

        $caoTipoCusto = CaoTipoCusto::create($request->all());

        return redirect()->route('cao-tipo-custos.index')
            ->with('success', 'CaoTipoCusto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoTipoCusto = CaoTipoCusto::find($id);

        return view('cao-tipo-custo.show', compact('caoTipoCusto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoTipoCusto = CaoTipoCusto::find($id);

        return view('cao-tipo-custo.edit', compact('caoTipoCusto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoTipoCusto $caoTipoCusto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoTipoCusto $caoTipoCusto)
    {
        request()->validate(CaoTipoCusto::$rules);

        $caoTipoCusto->update($request->all());

        return redirect()->route('cao-tipo-custos.index')
            ->with('success', 'CaoTipoCusto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoTipoCusto = CaoTipoCusto::find($id)->delete();

        return redirect()->route('cao-tipo-custos.index')
            ->with('success', 'CaoTipoCusto deleted successfully');
    }
}
