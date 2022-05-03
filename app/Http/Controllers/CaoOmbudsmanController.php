<?php

namespace App\Http\Controllers;

use App\Models\CaoOmbudsman;
use Illuminate\Http\Request;

/**
 * Class CaoOmbudsmanController
 * @package App\Http\Controllers
 */
class CaoOmbudsmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoOmbudsmen = CaoOmbudsman::paginate();

        return view('cao-ombudsman.index', compact('caoOmbudsmen'))
            ->with('i', (request()->input('page', 1) - 1) * $caoOmbudsmen->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoOmbudsman = new CaoOmbudsman();
        return view('cao-ombudsman.create', compact('caoOmbudsman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoOmbudsman::$rules);

        $caoOmbudsman = CaoOmbudsman::create($request->all());

        return redirect()->route('cao-ombudsmen.index')
            ->with('success', 'CaoOmbudsman created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoOmbudsman = CaoOmbudsman::find($id);

        return view('cao-ombudsman.show', compact('caoOmbudsman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoOmbudsman = CaoOmbudsman::find($id);

        return view('cao-ombudsman.edit', compact('caoOmbudsman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoOmbudsman $caoOmbudsman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoOmbudsman $caoOmbudsman)
    {
        request()->validate(CaoOmbudsman::$rules);

        $caoOmbudsman->update($request->all());

        return redirect()->route('cao-ombudsmen.index')
            ->with('success', 'CaoOmbudsman updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoOmbudsman = CaoOmbudsman::find($id)->delete();

        return redirect()->route('cao-ombudsmen.index')
            ->with('success', 'CaoOmbudsman deleted successfully');
    }
}
