<?php

namespace App\Http\Controllers;

use App\Models\PasswordReset;
use Illuminate\Http\Request;

/**
 * Class PasswordResetController
 * @package App\Http\Controllers
 */
class PasswordResetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passwordResets = PasswordReset::paginate();

        return view('password-reset.index', compact('passwordResets'))
            ->with('i', (request()->input('page', 1) - 1) * $passwordResets->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $passwordReset = new PasswordReset();
        return view('password-reset.create', compact('passwordReset'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PasswordReset::$rules);

        $passwordReset = PasswordReset::create($request->all());

        return redirect()->route('password-resets.index')
            ->with('success', 'PasswordReset created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $passwordReset = PasswordReset::find($id);

        return view('password-reset.show', compact('passwordReset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $passwordReset = PasswordReset::find($id);

        return view('password-reset.edit', compact('passwordReset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PasswordReset $passwordReset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PasswordReset $passwordReset)
    {
        request()->validate(PasswordReset::$rules);

        $passwordReset->update($request->all());

        return redirect()->route('password-resets.index')
            ->with('success', 'PasswordReset updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $passwordReset = PasswordReset::find($id)->delete();

        return redirect()->route('password-resets.index')
            ->with('success', 'PasswordReset deleted successfully');
    }
}
