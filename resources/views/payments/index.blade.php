@extends('layouts.app2')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between mb-3 align-items-center">
            <div class="col-lg-2">
                <h5 class="card-title"></h5>
            </div>
            <div class="col-lg-10 text-end">
                <a href="{{ route('payments.create') }}" class="btn btn-primary"> <!-- Modificado el botón para redireccionar a la ruta 'payments.create' -->
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
                                <h5 class="card-title">Pagos</h5> <!-- Cambiado el título a 'Pagos' -->
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th> <!-- Cambiado 'Nombre' por 'Cantidad' -->
                                        <th scope="col">Descrpcion</th> <!-- Añadido 'Fecha' como columna -->
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($payments as $payment) <!-- Cambiado '$roles' por '$payments' -->
                                    <tr>
                                        <th scope="row">{{ $payment->id }}</th> <!-- Cambiado '$role' por '$payment' -->
                                        <td>{{ $payment->name }}</td> <!-- Cambiado 'name' por 'amount' -->
                                        <td>{{ $payment->description }}</td> <!-- Añadido '$payment->date' como columna -->
                                        <td>
                                            <a href="{{ route('payments.show', $payment->id) }}" class="btn btn-primary">Ver</a> <!-- Cambiado 'roles' por 'payments' -->
                                            <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-warning">Editar</a> <!-- Cambiado 'roles' por 'payments' -->
                                            <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display: inline-block;">
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
