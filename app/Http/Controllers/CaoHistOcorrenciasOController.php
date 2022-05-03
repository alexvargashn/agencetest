<?php

namespace App\Http\Controllers;

use App\Models\CaoHistOcorrenciasO;
use Illuminate\Http\Request;

/**
 * Class CaoHistOcorrenciasOController
 * @package App\Http\Controllers
 */
class CaoHistOcorrenciasOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoHistOcorrenciasOs = CaoHistOcorrenciasO::paginate();

        return view('cao-hist-ocorrencias-o.index', compact('caoHistOcorrenciasOs'))
            ->with('i', (request()->input('page', 1) - 1) * $caoHistOcorrenciasOs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoHistOcorrenciasO = new CaoHistOcorrenciasO();
        return view('cao-hist-ocorrencias-o.create', compact('caoHistOcorrenciasO'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoHistOcorrenciasO::$rules);

        $caoHistOcorrenciasO = CaoHistOcorrenciasO::create($request->all());

        return redirect()->route('cao-hist-ocorrencias-os.index')
            ->with('success', 'CaoHistOcorrenciasO created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoHistOcorrenciasO = CaoHistOcorrenciasO::find($id);

        return view('cao-hist-ocorrencias-o.show', compact('caoHistOcorrenciasO'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoHistOcorrenciasO = CaoHistOcorrenciasO::find($id);

        return view('cao-hist-ocorrencias-o.edit', compact('caoHistOcorrenciasO'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoHistOcorrenciasO $caoHistOcorrenciasO
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoHistOcorrenciasO $caoHistOcorrenciasO)
    {
        request()->validate(CaoHistOcorrenciasO::$rules);

        $caoHistOcorrenciasO->update($request->all());

        return redirect()->route('cao-hist-ocorrencias-os.index')
            ->with('success', 'CaoHistOcorrenciasO updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoHistOcorrenciasO = CaoHistOcorrenciasO::find($id)->delete();

        return redirect()->route('cao-hist-ocorrencias-os.index')
            ->with('success', 'CaoHistOcorrenciasO deleted successfully');
    }
}
