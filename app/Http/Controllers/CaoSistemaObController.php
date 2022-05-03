<?php

namespace App\Http\Controllers;

use App\Models\CaoSistemaOb;
use Illuminate\Http\Request;

/**
 * Class CaoSistemaObController
 * @package App\Http\Controllers
 */
class CaoSistemaObController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoSistemaObs = CaoSistemaOb::paginate();

        return view('cao-sistema-ob.index', compact('caoSistemaObs'))
            ->with('i', (request()->input('page', 1) - 1) * $caoSistemaObs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoSistemaOb = new CaoSistemaOb();
        return view('cao-sistema-ob.create', compact('caoSistemaOb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoSistemaOb::$rules);

        $caoSistemaOb = CaoSistemaOb::create($request->all());

        return redirect()->route('cao-sistema-obs.index')
            ->with('success', 'CaoSistemaOb created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoSistemaOb = CaoSistemaOb::find($id);

        return view('cao-sistema-ob.show', compact('caoSistemaOb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoSistemaOb = CaoSistemaOb::find($id);

        return view('cao-sistema-ob.edit', compact('caoSistemaOb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoSistemaOb $caoSistemaOb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoSistemaOb $caoSistemaOb)
    {
        request()->validate(CaoSistemaOb::$rules);

        $caoSistemaOb->update($request->all());

        return redirect()->route('cao-sistema-obs.index')
            ->with('success', 'CaoSistemaOb updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoSistemaOb = CaoSistemaOb::find($id)->delete();

        return redirect()->route('cao-sistema-obs.index')
            ->with('success', 'CaoSistemaOb deleted successfully');
    }
}
