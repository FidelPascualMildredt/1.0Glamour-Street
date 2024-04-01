@extends('layouts.app2')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between mb-3 align-items-center">
            <div class="col-lg-2">
                <h5 class="card-title"></h5>
            </div>
            <div class="col-lg-10 text-end">
                <a href="{{ route('logos.create') }}" class="btn btn-primary"> <!-- Modificado el botón para redireccionar a la ruta 'logos.create' -->
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
                                <h5 class="card-title">Logos</h5>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Detalles</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($logos as $logo)
                                    <tr>
                                        <th scope="row">{{ $logo->id }}</th>
                                        <td>{{ $logo->name }}</td>
                                        <td>{{ $logo->product_id }}</td>
                                        <td>{{ $logo->user_id }}</td>
                                        <td>{{ $logo->image }}</td>
                                        <td>{{ $logo->details }}</td>
                                        <td>
                                            <a href="{{ route('logos.show', $logo->id) }}" class="btn btn-primary">Ver</a>
                                            <a href="{{ route('logos.edit', $logo->id) }}" class="btn btn-warning">Editar</a>
                                            <form action="{{ route('logos.destroy', $logo->id) }}" method="POST" style="display: inline-block;">
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
