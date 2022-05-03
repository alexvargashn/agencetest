<?php

namespace App\Http\Controllers;

use App\Models\CaoHorarioAlmoco;
use Illuminate\Http\Request;

/**
 * Class CaoHorarioAlmocoController
 * @package App\Http\Controllers
 */
class CaoHorarioAlmocoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoHorarioAlmocos = CaoHorarioAlmoco::paginate();

        return view('cao-horario-almoco.index', compact('caoHorarioAlmocos'))
            ->with('i', (request()->input('page', 1) - 1) * $caoHorarioAlmocos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoHorarioAlmoco = new CaoHorarioAlmoco();
        return view('cao-horario-almoco.create', compact('caoHorarioAlmoco'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoHorarioAlmoco::$rules);

        $caoHorarioAlmoco = CaoHorarioAlmoco::create($request->all());

        return redirect()->route('cao-horario-almocos.index')
            ->with('success', 'CaoHorarioAlmoco created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoHorarioAlmoco = CaoHorarioAlmoco::find($id);

        return view('cao-horario-almoco.show', compact('caoHorarioAlmoco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoHorarioAlmoco = CaoHorarioAlmoco::find($id);

        return view('cao-horario-almoco.edit', compact('caoHorarioAlmoco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoHorarioAlmoco $caoHorarioAlmoco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoHorarioAlmoco $caoHorarioAlmoco)
    {
        request()->validate(CaoHorarioAlmoco::$rules);

        $caoHorarioAlmoco->update($request->all());

        return redirect()->route('cao-horario-almocos.index')
            ->with('success', 'CaoHorarioAlmoco updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoHorarioAlmoco = CaoHorarioAlmoco::find($id)->delete();

        return redirect()->route('cao-horario-almocos.index')
            ->with('success', 'CaoHorarioAlmoco deleted successfully');
    }
}
