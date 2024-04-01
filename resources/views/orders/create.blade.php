@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Crear Orden</h5>
                    <hr>
                    <form method="POST" action="{{ route('orders.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="customer_id">ID del Cliente</label>
                            <input type="text" class="form-control" id="customer_id" name="customer_id" placeholder="Introduzca el ID del cliente">
                        </div>
                        {{-- <div class="form-group">
                            <label for="user_id">Usuario</label>
                            <select class="form-control" id="user_id" name="user_id">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label for="status">Estado</label>
                            <input type="text" class="form-control" id="status" name="status" placeholder="Introduzca el estado">
                        </div>
                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <input type="datetime-local" class="form-control" id="date" name="date">
                        </div>
                        <div class="form-group">
                            <label for="subtotal">Subtotal</label>
                            <input type="number" step="0.01" class="form-control" id="subtotal" name="subtotal" placeholder="Introduzca el subtotal">
                        </div>
                        <div class="form-group">
                            <label for="iva">IVA</label>
                            <input type="number" step="0.01" class="form-control" id="iva" name="iva" placeholder="Introduzca el IVA">
                        </div>
                        <div class="form-group">
                            <label for="total">Total</label>
                            <input type="number" step="0.01" class="form-control" id="total" name="total" placeholder="Introduzca el total">
                        </div>
                        <div class="form-group">
                            <label for="payment_id">ID del Pago</label>
                            <input type="text" class="form-control" id="payment_id" name="payment_id" placeholder="Introduzca el ID del pago">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-light"><i class="icon-lock"></i> Guardar</button>
                            <a href="{{ route('orders.index') }}" class="btn btn-light"><i class="icon-arrow-left"></i> Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
