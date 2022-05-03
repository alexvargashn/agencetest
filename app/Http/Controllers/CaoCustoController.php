<?php

namespace App\Http\Controllers;

use App\Models\CaoCusto;
use Illuminate\Http\Request;

/**
 * Class CaoCustoController
 * @package App\Http\Controllers
 */
class CaoCustoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoCustos = CaoCusto::paginate();

        return view('cao-custo.index', compact('caoCustos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoCustos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoCusto = new CaoCusto();
        return view('cao-custo.create', compact('caoCusto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoCusto::$rules);

        $caoCusto = CaoCusto::create($request->all());

        return redirect()->route('cao-custos.index')
            ->with('success', 'CaoCusto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoCusto = CaoCusto::find($id);

        return view('cao-custo.show', compact('caoCusto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoCusto = CaoCusto::find($id);

        return view('cao-custo.edit', compact('caoCusto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoCusto $caoCusto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoCusto $caoCusto)
    {
        request()->validate(CaoCusto::$rules);

        $caoCusto->update($request->all());

        return redirect()->route('cao-custos.index')
            ->with('success', 'CaoCusto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoCusto = CaoCusto::find($id)->delete();

        return redirect()->route('cao-custos.index')
            ->with('success', 'CaoCusto deleted successfully');
    }
}
