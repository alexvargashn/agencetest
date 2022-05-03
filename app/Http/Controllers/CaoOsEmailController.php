<?php

namespace App\Http\Controllers;

use App\Models\CaoOsEmail;
use Illuminate\Http\Request;

/**
 * Class CaoOsEmailController
 * @package App\Http\Controllers
 */
class CaoOsEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caoOsEmails = CaoOsEmail::paginate();

        return view('cao-os-email.index', compact('caoOsEmails'))
            ->with('i', (request()->input('page', 1) - 1) * $caoOsEmails->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caoOsEmail = new CaoOsEmail();
        return view('cao-os-email.create', compact('caoOsEmail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CaoOsEmail::$rules);

        $caoOsEmail = CaoOsEmail::create($request->all());

        return redirect()->route('cao-os-emails.index')
            ->with('success', 'CaoOsEmail created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caoOsEmail = CaoOsEmail::find($id);

        return view('cao-os-email.show', compact('caoOsEmail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caoOsEmail = CaoOsEmail::find($id);

        return view('cao-os-email.edit', compact('caoOsEmail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CaoOsEmail $caoOsEmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaoOsEmail $caoOsEmail)
    {
        request()->validate(CaoOsEmail::$rules);

        $caoOsEmail->update($request->all());

        return redirect()->route('cao-os-emails.index')
            ->with('success', 'CaoOsEmail updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caoOsEmail = CaoOsEmail::find($id)->delete();

        return redirect()->route('cao-os-emails.index')
            ->with('success', 'CaoOsEmail deleted successfully');
    }
}
