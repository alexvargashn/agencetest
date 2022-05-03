<?php

namespace App\Http\Controllers;

use App\Models\CaoMovimentoO;
use Illuminate\Http\Request;

/**
 * Class CaoMovimentoOController
 * @package App\Http\Controllers
 */
class CaoMovimentoOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoMovimentoOs = CaoMovimentoO::paginate();

        return view('cao-movimento-o.index', compact('caoMovimentoOs'))
            ->with('i', (request()->input('page', 1) - 1) * $caoMovimentoOs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoMovimentoO = new CaoMovimentoO();
        return view('cao-movimento-o.create', compact('caoMovimentoO'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoMovimentoO::$rules);

        $caoMovimentoO = CaoMovimentoO::create($request->all());

        return redirect()->route('cao-movimento-os.index')
            ->with('success', 'CaoMovimentoO created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoMovimentoO = CaoMovimentoO::find($id);

        return view('cao-movimento-o.show', compact('caoMovimentoO'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoMovimentoO = CaoMovimentoO::find($id);

        return view('cao-movimento-o.edit', compact('caoMovimentoO'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoMovimentoO $caoMovimentoO
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoMovimentoO $caoMovimentoO)
    {
        request()->validate(CaoMovimentoO::$rules);

        $caoMovimentoO->update($request->all());

        return redirect()->route('cao-movimento-os.index')
            ->with('success', 'CaoMovimentoO updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoMovimentoO = CaoMovimentoO::find($id)->delete();

        return redirect()->route('cao-movimento-os.index')
            ->with('success', 'CaoMovimentoO deleted successfully');
    }
}
