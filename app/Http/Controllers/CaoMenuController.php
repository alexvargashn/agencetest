<?php

namespace App\Http\Controllers;

use App\Models\CaoMenu;
use Illuminate\Http\Request;

/**
 * Class CaoMenuController
 * @package App\Http\Controllers
 */
class CaoMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoMenus = CaoMenu::paginate();

        return view('cao-menu.index', compact('caoMenus'))
            ->with('i', (request()->input('page', 1) - 1) * $caoMenus->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoMenu = new CaoMenu();
        return view('cao-menu.create', compact('caoMenu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoMenu::$rules);

        $caoMenu = CaoMenu::create($request->all());

        return redirect()->route('cao-menus.index')
            ->with('success', 'CaoMenu created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoMenu = CaoMenu::find($id);

        return view('cao-menu.show', compact('caoMenu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoMenu = CaoMenu::find($id);

        return view('cao-menu.edit', compact('caoMenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoMenu $caoMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoMenu $caoMenu)
    {
        request()->validate(CaoMenu::$rules);

        $caoMenu->update($request->all());

        return redirect()->route('cao-menus.index')
            ->with('success', 'CaoMenu updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoMenu = CaoMenu::find($id)->delete();

        return redirect()->route('cao-menus.index')
            ->with('success', 'CaoMenu deleted successfully');
    }
}
