<?php

namespace App\Http\Controllers;

use App\Models\CaoTempImport;
use Illuminate\Http\Request;

/**
 * Class CaoTempImportController
 * @package App\Http\Controllers
 */
class CaoTempImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoTempImports = CaoTempImport::paginate();

        return view('cao-temp-import.index', compact('caoTempImports'))
            ->with('i', (request()->input('page', 1) - 1) * $caoTempImports->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoTempImport = new CaoTempImport();
        return view('cao-temp-import.create', compact('caoTempImport'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoTempImport::$rules);

        $caoTempImport = CaoTempImport::create($request->all());

        return redirect()->route('cao-temp-imports.index')
            ->with('success', 'CaoTempImport created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoTempImport = CaoTempImport::find($id);

        return view('cao-temp-import.show', compact('caoTempImport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoTempImport = CaoTempImport::find($id);

        return view('cao-temp-import.edit', compact('caoTempImport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoTempImport $caoTempImport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoTempImport $caoTempImport)
    {
        request()->validate(CaoTempImport::$rules);

        $caoTempImport->update($request->all());

        return redirect()->route('cao-temp-imports.index')
            ->with('success', 'CaoTempImport updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoTempImport = CaoTempImport::find($id)->delete();

        return redirect()->route('cao-temp-imports.index')
            ->with('success', 'CaoTempImport deleted successfully');
    }
}
