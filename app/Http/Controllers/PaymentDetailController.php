<?php

namespace App\Http\Controllers;
use App\Models\PaymentDetail;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentDetails = PaymentDetail::all();
        return view('payment_details.index', compact('paymentDetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $payments = Payment::all();
        return view('payment_details.create', compact('users', 'payments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'payment_id' => 'required|exists:payments,id',
            'details' => 'nullable|string',
        ]);

        PaymentDetail::create($request->all());

        return redirect()->route('payment_details.index')
            ->with('success', 'Detalles de pago creados correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paymentDetail = PaymentDetail::findOrFail($id);
        return view('payment_details.show', compact('paymentDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paymentDetail = PaymentDetail::findOrFail($id);
        $users = User::all();
        $payments = Payment::all();
        return view('payment_details.edit', compact('paymentDetail', 'users', 'payments'));
    //     $paymentDetail = PaymentDetail::with('user', 'payment')->findOrFail($id);
    // return view('payment_details.edit', compact('paymentDetail'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'payment_id' => 'required|exists:payments,id',
            'details' => 'nullable|string',
        ]);

        $paymentDetail = PaymentDetail::findOrFail($id);
        $paymentDetail->update($request->all());

        return redirect()->route('payment_details.index')
            ->with('success', 'Detalles de pago actualizados correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paymentDetail = PaymentDetail::findOrFail($id);
        $paymentDetail->delete();

        return redirect()->route('payment_details.index')
            ->with('success', 'Detalles de pago eliminados correctamente.');
    
    }
}
