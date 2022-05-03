<?php

namespace App\Http\Controllers;

use App\Models\CaoUf;
use Illuminate\Http\Request;

/**
 * Class CaoUfController
 * @package App\Http\Controllers
 */
class CaoUfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoUfs = CaoUf::paginate();

        return view('cao-uf.index', compact('caoUfs'))
            ->with('i', (request()->input('page', 1) - 1) * $caoUfs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoUf = new CaoUf();
        return view('cao-uf.create', compact('caoUf'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoUf::$rules);

        $caoUf = CaoUf::create($request->all());

        return redirect()->route('cao-ufs.index')
            ->with('success', 'CaoUf created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoUf = CaoUf::find($id);

        return view('cao-uf.show', compact('caoUf'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoUf = CaoUf::find($id);

        return view('cao-uf.edit', compact('caoUf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoUf $caoUf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoUf $caoUf)
    {
        request()->validate(CaoUf::$rules);

        $caoUf->update($request->all());

        return redirect()->route('cao-ufs.index')
            ->with('success', 'CaoUf updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoUf = CaoUf::find($id)->delete();

        return redirect()->route('cao-ufs.index')
            ->with('success', 'CaoUf deleted successfully');
    }
}
