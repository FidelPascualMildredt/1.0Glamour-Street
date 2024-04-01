@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Detalles del Pago</h5>
                    <hr>
                    <dl class="row">
                        <dt class="col-sm-4">ID del Usuario:</dt>
                        <dd class="col-sm-8">{{ $paymentDetail->user->id }}</dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Nombre del Usuario:</dt>
                        <dd class="col-sm-8">{{ $paymentDetail->user->name }}</dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">ID del Pago:</dt>
                        <dd class="col-sm-8">{{ $paymentDetail->payment->id }}</dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Descripción del Pago:</dt>
                        <dd class="col-sm-8">{{ $paymentDetail->payment->description }}</dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Detalles:</dt>
                        <dd class="col-sm-8">{{ $paymentDetail->details }}</dd>
                    </dl>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <a href="{{ route('payment_details.index') }}" class="btn btn-light">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
