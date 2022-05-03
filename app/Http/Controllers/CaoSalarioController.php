<?php

namespace App\Http\Controllers;

use App\Models\CaoSalario;
use Illuminate\Http\Request;

/**
 * Class CaoSalarioController
 * @package App\Http\Controllers
 */
class CaoSalarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoSalarios = CaoSalario::paginate();

        return view('cao-salario.index', compact('caoSalarios'))
            ->with('i', (request()->input('page', 1) - 1) * $caoSalarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoSalario = new CaoSalario();
        return view('cao-salario.create', compact('caoSalario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoSalario::$rules);

        $caoSalario = CaoSalario::create($request->all());

        return redirect()->route('cao-salarios.index')
            ->with('success', 'CaoSalario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoSalario = CaoSalario::find($id);

        return view('cao-salario.show', compact('caoSalario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoSalario = CaoSalario::find($id);

        return view('cao-salario.edit', compact('caoSalario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoSalario $caoSalario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoSalario $caoSalario)
    {
        request()->validate(CaoSalario::$rules);

        $caoSalario->update($request->all());

        return redirect()->route('cao-salarios.index')
            ->with('success', 'CaoSalario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoSalario = CaoSalario::find($id)->delete();

        return redirect()->route('cao-salarios.index')
            ->with('success', 'CaoSalario deleted successfully');
    }
}
