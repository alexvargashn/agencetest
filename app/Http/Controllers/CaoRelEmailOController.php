<?php

namespace App\Http\Controllers;

use App\Models\CaoRelEmailO;
use Illuminate\Http\Request;

/**
 * Class CaoRelEmailOController
 * @package App\Http\Controllers
 */
class CaoRelEmailOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoRelEmailOs = CaoRelEmailO::paginate();

        return view('cao-rel-email-o.index', compact('caoRelEmailOs'))
            ->with('i', (request()->input('page', 1) - 1) * $caoRelEmailOs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoRelEmailO = new CaoRelEmailO();
        return view('cao-rel-email-o.create', compact('caoRelEmailO'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoRelEmailO::$rules);

        $caoRelEmailO = CaoRelEmailO::create($request->all());

        return redirect()->route('cao-rel-email-os.index')
            ->with('success', 'CaoRelEmailO created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoRelEmailO = CaoRelEmailO::find($id);

        return view('cao-rel-email-o.show', compact('caoRelEmailO'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoRelEmailO = CaoRelEmailO::find($id);

        return view('cao-rel-email-o.edit', compact('caoRelEmailO'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoRelEmailO $caoRelEmailO
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoRelEmailO $caoRelEmailO)
    {
        request()->validate(CaoRelEmailO::$rules);

        $caoRelEmailO->update($request->all());

        return redirect()->route('cao-rel-email-os.index')
            ->with('success', 'CaoRelEmailO updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoRelEmailO = CaoRelEmailO::find($id)->delete();

        return redirect()->route('cao-rel-email-os.index')
            ->with('success', 'CaoRelEmailO deleted successfully');
    }
}
