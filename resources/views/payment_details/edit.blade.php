@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Editar Detalles de Pago</h5>
                    <hr>
                    <form method="POST" action="{{ route('payment_details.update', $paymentDetail->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="user_id">Usuario</label>
                            @if ($paymentDetail->user)
                                <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $paymentDetail->user->name }}" readonly>
                            @else
                                <input type="text" class="form-control" id="user_id" name="user_id" value="Usuario no encontrado" readonly>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="payment_id">Pago</label>
                            @if ($paymentDetail->payment)
                                <input type="text" class="form-control" id="payment_id" name="payment_id" value="{{ $paymentDetail->payment->name }}" readonly>
                            @else
                                <input type="text" class="form-control" id="payment_id" name="payment_id" value="Pago no encontrado" readonly>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="details">Detalles</label>
                            <textarea class="form-control" id="details" name="details" rows="3">{{ $paymentDetail->details }}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-light"><i class="icon-lock"></i> Actualizar</button>
                            <a href="{{ route('payment_details.index') }}" class="btn btn-light"><i class="icon-arrow-left"></i> Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
