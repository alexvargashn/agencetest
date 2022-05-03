<?php

namespace App\Http\Controllers;

use App\Models\CaoO;
use Illuminate\Http\Request;

/**
 * Class CaoOController
 * @package App\Http\Controllers
 */
class CaoOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoOs = CaoO::paginate();

        return view('cao-o.index', compact('caoOs'))
            ->with('i', (request()->input('page', 1) - 1) * $caoOs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoO = new CaoO();
        return view('cao-o.create', compact('caoO'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoO::$rules);

        $caoO = CaoO::create($request->all());

        return redirect()->route('cao-os.index')
            ->with('success', 'CaoO created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoO = CaoO::find($id);

        return view('cao-o.show', compact('caoO'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoO = CaoO::find($id);

        return view('cao-o.edit', compact('caoO'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoO $caoO
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoO $caoO)
    {
        request()->validate(CaoO::$rules);

        $caoO->update($request->all());

        return redirect()->route('cao-os.index')
            ->with('success', 'CaoO updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoO = CaoO::find($id)->delete();

        return redirect()->route('cao-os.index')
            ->with('success', 'CaoO deleted successfully');
    }
}
