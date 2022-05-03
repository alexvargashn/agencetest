<?php

namespace App\Http\Controllers;

use App\Models\CaoOsPrazo;
use Illuminate\Http\Request;

/**
 * Class CaoOsPrazoController
 * @package App\Http\Controllers
 */
class CaoOsPrazoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoOsPrazos = CaoOsPrazo::paginate();

        return view('cao-os-prazo.index', compact('caoOsPrazos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoOsPrazos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoOsPrazo = new CaoOsPrazo();
        return view('cao-os-prazo.create', compact('caoOsPrazo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoOsPrazo::$rules);

        $caoOsPrazo = CaoOsPrazo::create($request->all());

        return redirect()->route('cao-os-prazos.index')
            ->with('success', 'CaoOsPrazo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoOsPrazo = CaoOsPrazo::find($id);

        return view('cao-os-prazo.show', compact('caoOsPrazo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoOsPrazo = CaoOsPrazo::find($id);

        return view('cao-os-prazo.edit', compact('caoOsPrazo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoOsPrazo $caoOsPrazo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoOsPrazo $caoOsPrazo)
    {
        request()->validate(CaoOsPrazo::$rules);

        $caoOsPrazo->update($request->all());

        return redirect()->route('cao-os-prazos.index')
            ->with('success', 'CaoOsPrazo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoOsPrazo = CaoOsPrazo::find($id)->delete();

        return redirect()->route('cao-os-prazos.index')
            ->with('success', 'CaoOsPrazo deleted successfully');
    }
}
