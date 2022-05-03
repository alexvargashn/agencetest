<?php

namespace App\Http\Controllers;

use App\Models\CaoConhecimentosFonte;
use Illuminate\Http\Request;

/**
 * Class CaoConhecimentosFonteController
 * @package App\Http\Controllers
 */
class CaoConhecimentosFonteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoConhecimentosFontes = CaoConhecimentosFonte::paginate();

        return view('cao-conhecimentos-fonte.index', compact('caoConhecimentosFontes'))
            ->with('i', (request()->input('page', 1) - 1) * $caoConhecimentosFontes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoConhecimentosFonte = new CaoConhecimentosFonte();
        return view('cao-conhecimentos-fonte.create', compact('caoConhecimentosFonte'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoConhecimentosFonte::$rules);

        $caoConhecimentosFonte = CaoConhecimentosFonte::create($request->all());

        return redirect()->route('cao-conhecimentos-fontes.index')
            ->with('success', 'CaoConhecimentosFonte created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoConhecimentosFonte = CaoConhecimentosFonte::find($id);

        return view('cao-conhecimentos-fonte.show', compact('caoConhecimentosFonte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoConhecimentosFonte = CaoConhecimentosFonte::find($id);

        return view('cao-conhecimentos-fonte.edit', compact('caoConhecimentosFonte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoConhecimentosFonte $caoConhecimentosFonte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoConhecimentosFonte $caoConhecimentosFonte)
    {
        request()->validate(CaoConhecimentosFonte::$rules);

        $caoConhecimentosFonte->update($request->all());

        return redirect()->route('cao-conhecimentos-fontes.index')
            ->with('success', 'CaoConhecimentosFonte updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoConhecimentosFonte = CaoConhecimentosFonte::find($id)->delete();

        return redirect()->route('cao-conhecimentos-fontes.index')
            ->with('success', 'CaoConhecimentosFonte deleted successfully');
    }
}
