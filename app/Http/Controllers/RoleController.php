<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! auth()->user()->isAdmin) {
            abort(403);
        }

        $roles = Role::paginate(10);

        return view('backend.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! auth()->user()->isAdmin) {
            abort(403);
        }

        return view('backend.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! auth()->user()->isAdmin) {
            abort(403);
        }

        $request->validate([
            'name' => 'required|unique:roles,name',
            'label' => 'required',
        ]);

        Role::create([
            'name' => $request->name,
            'label' => $request->label
        ]);

        return redirect('/roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! auth()->user()->isAdmin) {
            abort(403);
        }

        $role = Role::findOrFail($id);

        return view('backend.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! auth()->user()->isAdmin) {
            abort(403);
        }

        $role = Role::findOrFail($id);

        return view('backend.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (! auth()->user()->isAdmin) {
            abort(403);
        }

        $request->validate([
            'name' => 'required|unique:roles,name,' . $id,
            'label' => 'required',
        ]);

        Role::findOrFail($id)->update([
            'name' => $request->name,
            'label' => $request->label,
        ]);

        return redirect('/roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! auth()->user()->isAdmin) {
            abort(403);
        }

        Role::findOrFail($id)->delete();

        return redirect('/roles');
    }
}
