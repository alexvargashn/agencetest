<?php

namespace App\Http\Controllers;

use App\Models\CaoHelpFilial;
use Illuminate\Http\Request;

/**
 * Class CaoHelpFilialController
 * @package App\Http\Controllers
 */
class CaoHelpFilialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoHelpFilials = CaoHelpFilial::paginate();

        return view('cao-help-filial.index', compact('caoHelpFilials'))
            ->with('i', (request()->input('page', 1) - 1) * $caoHelpFilials->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoHelpFilial = new CaoHelpFilial();
        return view('cao-help-filial.create', compact('caoHelpFilial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoHelpFilial::$rules);

        $caoHelpFilial = CaoHelpFilial::create($request->all());

        return redirect()->route('cao-help-filials.index')
            ->with('success', 'CaoHelpFilial created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoHelpFilial = CaoHelpFilial::find($id);

        return view('cao-help-filial.show', compact('caoHelpFilial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoHelpFilial = CaoHelpFilial::find($id);

        return view('cao-help-filial.edit', compact('caoHelpFilial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoHelpFilial $caoHelpFilial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoHelpFilial $caoHelpFilial)
    {
        request()->validate(CaoHelpFilial::$rules);

        $caoHelpFilial->update($request->all());

        return redirect()->route('cao-help-filials.index')
            ->with('success', 'CaoHelpFilial updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoHelpFilial = CaoHelpFilial::find($id)->delete();

        return redirect()->route('cao-help-filials.index')
            ->with('success', 'CaoHelpFilial deleted successfully');
    }
}
