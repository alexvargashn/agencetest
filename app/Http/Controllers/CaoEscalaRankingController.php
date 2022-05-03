<?php

namespace App\Http\Controllers;

use App\Models\CaoEscalaRanking;
use Illuminate\Http\Request;

/**
 * Class CaoEscalaRankingController
 * @package App\Http\Controllers
 */
class CaoEscalaRankingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoEscalaRankings = CaoEscalaRanking::paginate();

        return view('cao-escala-ranking.index', compact('caoEscalaRankings'))
            ->with('i', (request()->input('page', 1) - 1) * $caoEscalaRankings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoEscalaRanking = new CaoEscalaRanking();
        return view('cao-escala-ranking.create', compact('caoEscalaRanking'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoEscalaRanking::$rules);

        $caoEscalaRanking = CaoEscalaRanking::create($request->all());

        return redirect()->route('cao-escala-rankings.index')
            ->with('success', 'CaoEscalaRanking created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoEscalaRanking = CaoEscalaRanking::find($id);

        return view('cao-escala-ranking.show', compact('caoEscalaRanking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoEscalaRanking = CaoEscalaRanking::find($id);

        return view('cao-escala-ranking.edit', compact('caoEscalaRanking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoEscalaRanking $caoEscalaRanking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoEscalaRanking $caoEscalaRanking)
    {
        request()->validate(CaoEscalaRanking::$rules);

        $caoEscalaRanking->update($request->all());

        return redirect()->route('cao-escala-rankings.index')
            ->with('success', 'CaoEscalaRanking updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoEscalaRanking = CaoEscalaRanking::find($id)->delete();

        return redirect()->route('cao-escala-rankings.index')
            ->with('success', 'CaoEscalaRanking deleted successfully');
    }
}
