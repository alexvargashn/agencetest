<?php

namespace App\Http\Controllers;

use App\Models\CaoUsuarioDtDisp;
use Illuminate\Http\Request;

/**
 * Class CaoUsuarioDtDispController
 * @package App\Http\Controllers
 */
class CaoUsuarioDtDispController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoUsuarioDtDisps = CaoUsuarioDtDisp::paginate();

        return view('cao-usuario-dt-disp.index', compact('caoUsuarioDtDisps'))
            ->with('i', (request()->input('page', 1) - 1) * $caoUsuarioDtDisps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoUsuarioDtDisp = new CaoUsuarioDtDisp();
        return view('cao-usuario-dt-disp.create', compact('caoUsuarioDtDisp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoUsuarioDtDisp::$rules);

        $caoUsuarioDtDisp = CaoUsuarioDtDisp::create($request->all());

        return redirect()->route('cao-usuario-dt-disps.index')
            ->with('success', 'CaoUsuarioDtDisp created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoUsuarioDtDisp = CaoUsuarioDtDisp::find($id);

        return view('cao-usuario-dt-disp.show', compact('caoUsuarioDtDisp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoUsuarioDtDisp = CaoUsuarioDtDisp::find($id);

        return view('cao-usuario-dt-disp.edit', compact('caoUsuarioDtDisp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoUsuarioDtDisp $caoUsuarioDtDisp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoUsuarioDtDisp $caoUsuarioDtDisp)
    {
        request()->validate(CaoUsuarioDtDisp::$rules);

        $caoUsuarioDtDisp->update($request->all());

        return redirect()->route('cao-usuario-dt-disps.index')
            ->with('success', 'CaoUsuarioDtDisp updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoUsuarioDtDisp = CaoUsuarioDtDisp::find($id)->delete();

        return redirect()->route('cao-usuario-dt-disps.index')
            ->with('success', 'CaoUsuarioDtDisp deleted successfully');
    }
}
