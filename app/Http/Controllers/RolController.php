<?php

namespace App\Http\Controllers;

use App\Models\Rol;

use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Rol::all();
        return view('Role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Rol::create($request->all());

        return redirect()->route('roles.index')
            ->with('success', 'Rol creado satisfactoriamente!!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $role = Rol::findOrFail($id);


        return view('Role.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Rol::findOrFail($id);
        return view('Role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    $role = Rol::findOrFail($id);


    $request->validate([
        'name' => 'required|string|max:255',

    ]);


    $role->update($request->all());


    return redirect()->route('roles.index')
        ->with('success', '¡Rol actualizado satisfactoriamente!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $role = Rol::findOrFail($id);


        $role->delete();


        return redirect()->route('roles.index')->with('success', 'Rol borrado!!.');
    }
}
