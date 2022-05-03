<?php

namespace App\Http\Controllers;

use App\Models\CaoOsItemMenu;
use Illuminate\Http\Request;

/**
 * Class CaoOsItemMenuController
 * @package App\Http\Controllers
 */
class CaoOsItemMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoOsItemMenus = CaoOsItemMenu::paginate();

        return view('cao-os-item-menu.index', compact('caoOsItemMenus'))
            ->with('i', (request()->input('page', 1) - 1) * $caoOsItemMenus->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoOsItemMenu = new CaoOsItemMenu();
        return view('cao-os-item-menu.create', compact('caoOsItemMenu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoOsItemMenu::$rules);

        $caoOsItemMenu = CaoOsItemMenu::create($request->all());

        return redirect()->route('cao-os-item-menus.index')
            ->with('success', 'CaoOsItemMenu created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoOsItemMenu = CaoOsItemMenu::find($id);

        return view('cao-os-item-menu.show', compact('caoOsItemMenu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoOsItemMenu = CaoOsItemMenu::find($id);

        return view('cao-os-item-menu.edit', compact('caoOsItemMenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoOsItemMenu $caoOsItemMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoOsItemMenu $caoOsItemMenu)
    {
        request()->validate(CaoOsItemMenu::$rules);

        $caoOsItemMenu->update($request->all());

        return redirect()->route('cao-os-item-menus.index')
            ->with('success', 'CaoOsItemMenu updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoOsItemMenu = CaoOsItemMenu::find($id)->delete();

        return redirect()->route('cao-os-item-menus.index')
            ->with('success', 'CaoOsItemMenu deleted successfully');
    }
}
