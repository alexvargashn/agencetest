<?php

namespace App\Http\Controllers;

use App\Models\CaoPermissaoHoraExtra;
use Illuminate\Http\Request;

/**
 * Class CaoPermissaoHoraExtraController
 * @package App\Http\Controllers
 */
class CaoPermissaoHoraExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoPermissaoHoraExtras = CaoPermissaoHoraExtra::paginate();

        return view('cao-permissao-hora-extra.index', compact('caoPermissaoHoraExtras'))
            ->with('i', (request()->input('page', 1) - 1) * $caoPermissaoHoraExtras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoPermissaoHoraExtra = new CaoPermissaoHoraExtra();
        return view('cao-permissao-hora-extra.create', compact('caoPermissaoHoraExtra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoPermissaoHoraExtra::$rules);

        $caoPermissaoHoraExtra = CaoPermissaoHoraExtra::create($request->all());

        return redirect()->route('cao-permissao-hora-extras.index')
            ->with('success', 'CaoPermissaoHoraExtra created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoPermissaoHoraExtra = CaoPermissaoHoraExtra::find($id);

        return view('cao-permissao-hora-extra.show', compact('caoPermissaoHoraExtra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoPermissaoHoraExtra = CaoPermissaoHoraExtra::find($id);

        return view('cao-permissao-hora-extra.edit', compact('caoPermissaoHoraExtra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoPermissaoHoraExtra $caoPermissaoHoraExtra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoPermissaoHoraExtra $caoPermissaoHoraExtra)
    {
        request()->validate(CaoPermissaoHoraExtra::$rules);

        $caoPermissaoHoraExtra->update($request->all());

        return redirect()->route('cao-permissao-hora-extras.index')
            ->with('success', 'CaoPermissaoHoraExtra updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoPermissaoHoraExtra = CaoPermissaoHoraExtra::find($id)->delete();

        return redirect()->route('cao-permissao-hora-extras.index')
            ->with('success', 'CaoPermissaoHoraExtra deleted successfully');
    }
}
