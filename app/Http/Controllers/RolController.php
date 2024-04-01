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

        // Pass the role data to the view
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
        // Buscar el rol por su ID
    $role = Rol::findOrFail($id);

    // Validar los datos de la solicitud
    $request->validate([
        'name' => 'required|string|max:255',
        // Agregar reglas de validación para otros campos si es necesario
    ]);

    // Actualizar el rol con los datos validados
    $role->update($request->all());

    // Redirigir al usuario a una página relevante
    return redirect()->route('roles.index')
        ->with('success', '¡Rol actualizado satisfactoriamente!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Retrieve the role with the given ID from the database
        $role = Rol::findOrFail($id);

        // Delete the role
        $role->delete();

        // Redirect to a relevant page (e.g., index page)
        return redirect()->route('roles.index')->with('success', 'Rol borrado!!.');
    }
}
