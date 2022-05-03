<?php

namespace App\Http\Controllers;

use App\Models\CaoEscritorio;
use Illuminate\Http\Request;

/**
 * Class CaoEscritorioController
 * @package App\Http\Controllers
 */
class CaoEscritorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoEscritorios = CaoEscritorio::paginate();

        return view('cao-escritorio.index', compact('caoEscritorios'))
            ->with('i', (request()->input('page', 1) - 1) * $caoEscritorios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoEscritorio = new CaoEscritorio();
        return view('cao-escritorio.create', compact('caoEscritorio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoEscritorio::$rules);

        $caoEscritorio = CaoEscritorio::create($request->all());

        return redirect()->route('cao-escritorios.index')
            ->with('success', 'CaoEscritorio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoEscritorio = CaoEscritorio::find($id);

        return view('cao-escritorio.show', compact('caoEscritorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoEscritorio = CaoEscritorio::find($id);

        return view('cao-escritorio.edit', compact('caoEscritorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoEscritorio $caoEscritorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoEscritorio $caoEscritorio)
    {
        request()->validate(CaoEscritorio::$rules);

        $caoEscritorio->update($request->all());

        return redirect()->route('cao-escritorios.index')
            ->with('success', 'CaoEscritorio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoEscritorio = CaoEscritorio::find($id)->delete();

        return redirect()->route('cao-escritorios.index')
            ->with('success', 'CaoEscritorio deleted successfully');
    }
}
