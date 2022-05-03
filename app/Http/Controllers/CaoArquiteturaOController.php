<?php

namespace App\Http\Controllers;

use App\Models\CaoArquiteturaO;
use Illuminate\Http\Request;

/**
 * Class CaoArquiteturaOController
 * @package App\Http\Controllers
 */
class CaoArquiteturaOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoArquiteturaOs = CaoArquiteturaO::paginate();

        return view('cao-arquitetura-o.index', compact('caoArquiteturaOs'))
            ->with('i', (request()->input('page', 1) - 1) * $caoArquiteturaOs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoArquiteturaO = new CaoArquiteturaO();
        return view('cao-arquitetura-o.create', compact('caoArquiteturaO'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoArquiteturaO::$rules);

        $caoArquiteturaO = CaoArquiteturaO::create($request->all());

        return redirect()->route('cao-arquitetura-os.index')
            ->with('success', 'CaoArquiteturaO created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoArquiteturaO = CaoArquiteturaO::find($id);

        return view('cao-arquitetura-o.show', compact('caoArquiteturaO'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoArquiteturaO = CaoArquiteturaO::find($id);

        return view('cao-arquitetura-o.edit', compact('caoArquiteturaO'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoArquiteturaO $caoArquiteturaO
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoArquiteturaO $caoArquiteturaO)
    {
        request()->validate(CaoArquiteturaO::$rules);

        $caoArquiteturaO->update($request->all());

        return redirect()->route('cao-arquitetura-os.index')
            ->with('success', 'CaoArquiteturaO updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoArquiteturaO = CaoArquiteturaO::find($id)->delete();

        return redirect()->route('cao-arquitetura-os.index')
            ->with('success', 'CaoArquiteturaO deleted successfully');
    }
}
