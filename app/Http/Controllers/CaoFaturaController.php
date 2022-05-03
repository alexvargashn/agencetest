<?php

namespace App\Http\Controllers;

use App\Models\CaoFatura;
use Illuminate\Http\Request;

/**
 * Class CaoFaturaController
 * @package App\Http\Controllers
 */
class CaoFaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoFaturas = CaoFatura::paginate();

        return view('cao-fatura.index', compact('caoFaturas'))
            ->with('i', (request()->input('page', 1) - 1) * $caoFaturas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoFatura = new CaoFatura();
        return view('cao-fatura.create', compact('caoFatura'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoFatura::$rules);

        $caoFatura = CaoFatura::create($request->all());

        return redirect()->route('cao-faturas.index')
            ->with('success', 'CaoFatura created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoFatura = CaoFatura::find($id);

        return view('cao-fatura.show', compact('caoFatura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoFatura = CaoFatura::find($id);

        return view('cao-fatura.edit', compact('caoFatura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoFatura $caoFatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoFatura $caoFatura)
    {
        request()->validate(CaoFatura::$rules);

        $caoFatura->update($request->all());

        return redirect()->route('cao-faturas.index')
            ->with('success', 'CaoFatura updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoFatura = CaoFatura::find($id)->delete();

        return redirect()->route('cao-faturas.index')
            ->with('success', 'CaoFatura deleted successfully');
    }
}
