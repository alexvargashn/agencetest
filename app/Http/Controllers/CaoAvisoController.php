<?php

namespace App\Http\Controllers;

use App\Models\CaoAviso;
use Illuminate\Http\Request;

/**
 * Class CaoAvisoController
 * @package App\Http\Controllers
 */
class CaoAvisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoAvisos = CaoAviso::paginate();

        return view('cao-aviso.index', compact('caoAvisos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoAvisos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoAviso = new CaoAviso();
        return view('cao-aviso.create', compact('caoAviso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoAviso::$rules);

        $caoAviso = CaoAviso::create($request->all());

        return redirect()->route('cao-avisos.index')
            ->with('success', 'CaoAviso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoAviso = CaoAviso::find($id);

        return view('cao-aviso.show', compact('caoAviso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoAviso = CaoAviso::find($id);

        return view('cao-aviso.edit', compact('caoAviso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoAviso $caoAviso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoAviso $caoAviso)
    {
        request()->validate(CaoAviso::$rules);

        $caoAviso->update($request->all());

        return redirect()->route('cao-avisos.index')
            ->with('success', 'CaoAviso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoAviso = CaoAviso::find($id)->delete();

        return redirect()->route('cao-avisos.index')
            ->with('success', 'CaoAviso deleted successfully');
    }
}
