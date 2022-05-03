<?php

namespace App\Http\Controllers;

use App\Models\CaoOsOb;
use Illuminate\Http\Request;

/**
 * Class CaoOsObController
 * @package App\Http\Controllers
 */
class CaoOsObController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoOsObs = CaoOsOb::paginate();

        return view('cao-os-ob.index', compact('caoOsObs'))
            ->with('i', (request()->input('page', 1) - 1) * $caoOsObs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoOsOb = new CaoOsOb();
        return view('cao-os-ob.create', compact('caoOsOb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoOsOb::$rules);

        $caoOsOb = CaoOsOb::create($request->all());

        return redirect()->route('cao-os-obs.index')
            ->with('success', 'CaoOsOb created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoOsOb = CaoOsOb::find($id);

        return view('cao-os-ob.show', compact('caoOsOb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoOsOb = CaoOsOb::find($id);

        return view('cao-os-ob.edit', compact('caoOsOb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoOsOb $caoOsOb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoOsOb $caoOsOb)
    {
        request()->validate(CaoOsOb::$rules);

        $caoOsOb->update($request->all());

        return redirect()->route('cao-os-obs.index')
            ->with('success', 'CaoOsOb updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoOsOb = CaoOsOb::find($id)->delete();

        return redirect()->route('cao-os-obs.index')
            ->with('success', 'CaoOsOb deleted successfully');
    }
}
