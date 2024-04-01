<?php

namespace App\Http\Controllers;
use App\Models\Size;

use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::all();
        return view('sizes.index', compact('sizes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'name' => 'required|string|max:255|unique:sizes,name',
        ]);

        // Crear un nuevo tamaño
        $size = new Size();
        $size->name = $request->name;
        $size->save();

        // Redireccionar con un mensaje de éxito
        return redirect()->route('sizes.index')->with('success', '¡El tamaño se ha creado correctamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $size = Size::findOrFail($id);
        return view('sizes.show', compact('size'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $size = Size::findOrFail($id); // Obtener el tamaño por su ID

        return view('sizes.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $size = Size::findOrFail($id); // Obtener el tamaño por su ID

        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Actualizar el tamaño con los nuevos datos
        $size->name = $request->name;
        $size->save();

        return redirect()->route('sizes.index')->with('success', 'Tamaño actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $size = Size::findOrFail($id);
        $size->delete();
        return redirect()->route('sizes.index')->with('success', 'Tamaño eliminado exitosamente.');
    
    }
}
