<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role.create');
    }

  
    public function store(Request $request)
    {
        Role::create([
            'name'=>$request->name,
            'guard_name'=>'web'
        ]);
       return redirect()->route('roles.index')->with('alert-success', 'Role Berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Memorandum  $memorandum
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Memorandum  $memorandum
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        
        return view('role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMemorandumRequest  $request
     * @param  \App\Models\Memorandum  $memorandum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->update([
            'name' => $request->name,
            'guard_name'=>'web'
           
        ]);
        return redirect()->route('roles.index')->with('alert-success', 'Role berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Memorandum  $memorandum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        try {
            $role->delete();
        } catch (\Throwable $th) {
            return back()->with('alert-danger',$th->getMessage());
        }
        return redirect()->route('roles.index')->with('alert-success', 'Role berhasil dihapus');
    }
}
