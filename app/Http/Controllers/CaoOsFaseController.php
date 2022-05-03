<?php

namespace App\Http\Controllers;

use App\Models\CaoOsFase;
use Illuminate\Http\Request;

/**
 * Class CaoOsFaseController
 * @package App\Http\Controllers
 */
class CaoOsFaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoOsFases = CaoOsFase::paginate();

        return view('cao-os-fase.index', compact('caoOsFases'))
            ->with('i', (request()->input('page', 1) - 1) * $caoOsFases->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoOsFase = new CaoOsFase();
        return view('cao-os-fase.create', compact('caoOsFase'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoOsFase::$rules);

        $caoOsFase = CaoOsFase::create($request->all());

        return redirect()->route('cao-os-fases.index')
            ->with('success', 'CaoOsFase created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoOsFase = CaoOsFase::find($id);

        return view('cao-os-fase.show', compact('caoOsFase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoOsFase = CaoOsFase::find($id);

        return view('cao-os-fase.edit', compact('caoOsFase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoOsFase $caoOsFase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoOsFase $caoOsFase)
    {
        request()->validate(CaoOsFase::$rules);

        $caoOsFase->update($request->all());

        return redirect()->route('cao-os-fases.index')
            ->with('success', 'CaoOsFase updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoOsFase = CaoOsFase::find($id)->delete();

        return redirect()->route('cao-os-fases.index')
            ->with('success', 'CaoOsFase deleted successfully');
    }
}
