<?php

namespace App\Http\Controllers;

use App\Models\CaoComplemento;
use Illuminate\Http\Request;

/**
 * Class CaoComplementoController
 * @package App\Http\Controllers
 */
class CaoComplementoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoComplementos = CaoComplemento::paginate();

        return view('cao-complemento.index', compact('caoComplementos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoComplementos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoComplemento = new CaoComplemento();
        return view('cao-complemento.create', compact('caoComplemento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoComplemento::$rules);

        $caoComplemento = CaoComplemento::create($request->all());

        return redirect()->route('cao-complementos.index')
            ->with('success', 'CaoComplemento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoComplemento = CaoComplemento::find($id);

        return view('cao-complemento.show', compact('caoComplemento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoComplemento = CaoComplemento::find($id);

        return view('cao-complemento.edit', compact('caoComplemento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoComplemento $caoComplemento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoComplemento $caoComplemento)
    {
        request()->validate(CaoComplemento::$rules);

        $caoComplemento->update($request->all());

        return redirect()->route('cao-complementos.index')
            ->with('success', 'CaoComplemento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoComplemento = CaoComplemento::find($id)->delete();

        return redirect()->route('cao-complementos.index')
            ->with('success', 'CaoComplemento deleted successfully');
    }
}
