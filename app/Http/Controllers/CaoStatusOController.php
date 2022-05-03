<?php

namespace App\Http\Controllers;

use App\Models\CaoStatusO;
use Illuminate\Http\Request;

/**
 * Class CaoStatusOController
 * @package App\Http\Controllers
 */
class CaoStatusOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoStatusOs = CaoStatusO::paginate();

        return view('cao-status-o.index', compact('caoStatusOs'))
            ->with('i', (request()->input('page', 1) - 1) * $caoStatusOs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoStatusO = new CaoStatusO();
        return view('cao-status-o.create', compact('caoStatusO'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoStatusO::$rules);

        $caoStatusO = CaoStatusO::create($request->all());

        return redirect()->route('cao-status-os.index')
            ->with('success', 'CaoStatusO created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoStatusO = CaoStatusO::find($id);

        return view('cao-status-o.show', compact('caoStatusO'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoStatusO = CaoStatusO::find($id);

        return view('cao-status-o.edit', compact('caoStatusO'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoStatusO $caoStatusO
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoStatusO $caoStatusO)
    {
        request()->validate(CaoStatusO::$rules);

        $caoStatusO->update($request->all());

        return redirect()->route('cao-status-os.index')
            ->with('success', 'CaoStatusO updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoStatusO = CaoStatusO::find($id)->delete();

        return redirect()->route('cao-status-os.index')
            ->with('success', 'CaoStatusO deleted successfully');
    }
}
