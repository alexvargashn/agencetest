<?php

namespace App\Http\Controllers;

use App\Models\CaoAtividadeConsultor;
use Illuminate\Http\Request;

/**
 * Class CaoAtividadeConsultorController
 * @package App\Http\Controllers
 */
class CaoAtividadeConsultorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoAtividadeConsultors = CaoAtividadeConsultor::paginate();

        return view('cao-atividade-consultor.index', compact('caoAtividadeConsultors'))
            ->with('i', (request()->input('page', 1) - 1) * $caoAtividadeConsultors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoAtividadeConsultor = new CaoAtividadeConsultor();
        return view('cao-atividade-consultor.create', compact('caoAtividadeConsultor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoAtividadeConsultor::$rules);

        $caoAtividadeConsultor = CaoAtividadeConsultor::create($request->all());

        return redirect()->route('cao-atividade-consultors.index')
            ->with('success', 'CaoAtividadeConsultor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoAtividadeConsultor = CaoAtividadeConsultor::find($id);

        return view('cao-atividade-consultor.show', compact('caoAtividadeConsultor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoAtividadeConsultor = CaoAtividadeConsultor::find($id);

        return view('cao-atividade-consultor.edit', compact('caoAtividadeConsultor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoAtividadeConsultor $caoAtividadeConsultor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoAtividadeConsultor $caoAtividadeConsultor)
    {
        request()->validate(CaoAtividadeConsultor::$rules);

        $caoAtividadeConsultor->update($request->all());

        return redirect()->route('cao-atividade-consultors.index')
            ->with('success', 'CaoAtividadeConsultor updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoAtividadeConsultor = CaoAtividadeConsultor::find($id)->delete();

        return redirect()->route('cao-atividade-consultors.index')
            ->with('success', 'CaoAtividadeConsultor deleted successfully');
    }
}
