<?php

namespace App\Http\Controllers;

use App\Models\CaoSalarioPag;
use Illuminate\Http\Request;

/**
 * Class CaoSalarioPagController
 * @package App\Http\Controllers
 */
class CaoSalarioPagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoSalarioPags = CaoSalarioPag::paginate();

        return view('cao-salario-pag.index', compact('caoSalarioPags'))
            ->with('i', (request()->input('page', 1) - 1) * $caoSalarioPags->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoSalarioPag = new CaoSalarioPag();
        return view('cao-salario-pag.create', compact('caoSalarioPag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoSalarioPag::$rules);

        $caoSalarioPag = CaoSalarioPag::create($request->all());

        return redirect()->route('cao-salario-pags.index')
            ->with('success', 'CaoSalarioPag created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoSalarioPag = CaoSalarioPag::find($id);

        return view('cao-salario-pag.show', compact('caoSalarioPag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoSalarioPag = CaoSalarioPag::find($id);

        return view('cao-salario-pag.edit', compact('caoSalarioPag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoSalarioPag $caoSalarioPag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoSalarioPag $caoSalarioPag)
    {
        request()->validate(CaoSalarioPag::$rules);

        $caoSalarioPag->update($request->all());

        return redirect()->route('cao-salario-pags.index')
            ->with('success', 'CaoSalarioPag updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoSalarioPag = CaoSalarioPag::find($id)->delete();

        return redirect()->route('cao-salario-pags.index')
            ->with('success', 'CaoSalarioPag deleted successfully');
    }
}
