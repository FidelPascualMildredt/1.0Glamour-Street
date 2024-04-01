<?php

namespace App\Http\Controllers;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::all();
        return view('colors.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('colors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:colors',
        ]);

        Color::create($request->all());

        return redirect()->route('colors.index')
            ->with('success', 'Color creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $color = Color::findOrFail($id);
        return view('colors.show', compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $color = Color::findOrFail($id);
        return view('colors.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:colors,name,'.$id,
        ]);

        $color = Color::findOrFail($id);
        $color->update($request->all());

        return redirect()->route('colors.index')
            ->with('success', 'Color actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $color = Color::findOrFail($id);
        $color->delete();

        return redirect()->route('colors.index')
            ->with('success', 'Color eliminado exitosamente.');
    }
}
