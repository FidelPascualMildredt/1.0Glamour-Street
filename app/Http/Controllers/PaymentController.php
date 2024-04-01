<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use Illuminate\Http\Request;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::all();
        return view('payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
        ]);

        Payment::create($request->all());

        return redirect()->route('payments.index')->with('success', 'Pago creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = Payment::findOrFail($id);
        return view('payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payment = Payment::findOrFail($id);
    return view('payments.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Valida los datos del formulario
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
    ]);

    // Encuentra el pago a actualizar
    $payment = Payment::findOrFail($id);

    // Actualiza los campos del pago con los datos del formulario
    $payment->name = $request->input('name');
    $payment->description = $request->input('description');
    // Agrega más campos según sea necesario

    // Guarda los cambios en la base de datos
    $payment->save();

    // Redirecciona a la vista de detalles del pago
    return redirect()->route('payments.index', $payment->id)->with('success', 'Pago actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();
        return redirect()->route('payments.index')->with('success', 'Pago eliminado correctamente');
    }
}
