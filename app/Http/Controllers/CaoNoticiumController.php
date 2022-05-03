<?php

namespace App\Http\Controllers;

use App\Models\CaoNoticium;
use Illuminate\Http\Request;

/**
 * Class CaoNoticiumController
 * @package App\Http\Controllers
 */
class CaoNoticiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoNoticia = CaoNoticium::paginate();

        return view('cao-noticium.index', compact('caoNoticia'))
            ->with('i', (request()->input('page', 1) - 1) * $caoNoticia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoNoticium = new CaoNoticium();
        return view('cao-noticium.create', compact('caoNoticium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoNoticium::$rules);

        $caoNoticium = CaoNoticium::create($request->all());

        return redirect()->route('cao-noticia.index')
            ->with('success', 'CaoNoticium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoNoticium = CaoNoticium::find($id);

        return view('cao-noticium.show', compact('caoNoticium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoNoticium = CaoNoticium::find($id);

        return view('cao-noticium.edit', compact('caoNoticium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoNoticium $caoNoticium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoNoticium $caoNoticium)
    {
        request()->validate(CaoNoticium::$rules);

        $caoNoticium->update($request->all());

        return redirect()->route('cao-noticia.index')
            ->with('success', 'CaoNoticium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoNoticium = CaoNoticium::find($id)->delete();

        return redirect()->route('cao-noticia.index')
            ->with('success', 'CaoNoticium deleted successfully');
    }
}
