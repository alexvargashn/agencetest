<?php

namespace App\Http\Controllers;

use App\Models\CaoFaturaPag;
use Illuminate\Http\Request;

/**
 * Class CaoFaturaPagController
 * @package App\Http\Controllers
 */
class CaoFaturaPagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoFaturaPags = CaoFaturaPag::paginate();

        return view('cao-fatura-pag.index', compact('caoFaturaPags'))
            ->with('i', (request()->input('page', 1) - 1) * $caoFaturaPags->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoFaturaPag = new CaoFaturaPag();
        return view('cao-fatura-pag.create', compact('caoFaturaPag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoFaturaPag::$rules);

        $caoFaturaPag = CaoFaturaPag::create($request->all());

        return redirect()->route('cao-fatura-pags.index')
            ->with('success', 'CaoFaturaPag created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoFaturaPag = CaoFaturaPag::find($id);

        return view('cao-fatura-pag.show', compact('caoFaturaPag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoFaturaPag = CaoFaturaPag::find($id);

        return view('cao-fatura-pag.edit', compact('caoFaturaPag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoFaturaPag $caoFaturaPag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoFaturaPag $caoFaturaPag)
    {
        request()->validate(CaoFaturaPag::$rules);

        $caoFaturaPag->update($request->all());

        return redirect()->route('cao-fatura-pags.index')
            ->with('success', 'CaoFaturaPag updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoFaturaPag = CaoFaturaPag::find($id)->delete();

        return redirect()->route('cao-fatura-pags.index')
            ->with('success', 'CaoFaturaPag deleted successfully');
    }
}
