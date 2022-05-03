<?php

namespace App\Http\Controllers;

use App\Models\CaoHelpAutor;
use Illuminate\Http\Request;

/**
 * Class CaoHelpAutorController
 * @package App\Http\Controllers
 */
class CaoHelpAutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoHelpAutors = CaoHelpAutor::paginate();

        return view('cao-help-autor.index', compact('caoHelpAutors'))
            ->with('i', (request()->input('page', 1) - 1) * $caoHelpAutors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoHelpAutor = new CaoHelpAutor();
        return view('cao-help-autor.create', compact('caoHelpAutor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoHelpAutor::$rules);

        $caoHelpAutor = CaoHelpAutor::create($request->all());

        return redirect()->route('cao-help-autors.index')
            ->with('success', 'CaoHelpAutor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoHelpAutor = CaoHelpAutor::find($id);

        return view('cao-help-autor.show', compact('caoHelpAutor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoHelpAutor = CaoHelpAutor::find($id);

        return view('cao-help-autor.edit', compact('caoHelpAutor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoHelpAutor $caoHelpAutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoHelpAutor $caoHelpAutor)
    {
        request()->validate(CaoHelpAutor::$rules);

        $caoHelpAutor->update($request->all());

        return redirect()->route('cao-help-autors.index')
            ->with('success', 'CaoHelpAutor updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoHelpAutor = CaoHelpAutor::find($id)->delete();

        return redirect()->route('cao-help-autors.index')
            ->with('success', 'CaoHelpAutor deleted successfully');
    }
}
