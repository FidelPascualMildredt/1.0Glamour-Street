@extends('layouts.app2')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between mb-3 align-items-center">
            <div class="col-lg-2">
                <h5 class="card-title"></h5>
            </div>
            <div class="col-lg-10 text-end">
                <a href="{{ route('orders.create') }}" class="btn btn-primary"> <!-- Modificado el botón para redireccionar a la ruta 'orders.create' -->
                    Agregar
                </a>
            </div>
            <div class="col-lg-10 text-end">
                <h5 class="card-title"></h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <h5 class="card-title">Órdenes</h5>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">IVA</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <th scope="row">{{ $order->id }}</th>
                                        <td>{{ $order->customer_id }}</td>
                                        <td>{{ $order->user_id }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->date }}</td>
                                        <td>{{ $order->subtotal }}</td>
                                        <td>{{ $order->iva }}</td>
                                        <td>{{ $order->total }}</td>
                                        <td>
                                            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary">Ver</a>
                                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Editar</a>
                                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
