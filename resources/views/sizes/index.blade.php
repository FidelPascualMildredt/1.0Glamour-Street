@extends('layouts.app2')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between mb-3 align-items-center">
            <div class="col-lg-2">
                <h5 class="card-title"></h5>
            </div>
            <div class="col-lg-10 text-end">
                <a href="{{ route('sizes.create') }}" class="btn btn-primary"> <!-- Modificado el botón para redireccionar a la ruta 'roles.create' -->
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
                                <h5 class="card-title">Tallas</h5>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sizes as $size)
                                    <tr>
                                        <th scope="row">{{ $size->id }}</th>
                                        <td>{{ $size->name }}</td>
                                        <td>
                                            <a href="{{ route('sizes.show', $size->id) }}" class="btn btn-primary">Ver</a>
                                            <a href="{{ route('sizes.edit', $size->id) }}" class="btn btn-warning" style="background-color: #c0c0c0a0; color: #000000; border-color: #C0C0C0;">Editar</a>


                                            <form action="{{ route('sizes.destroy', $size->id) }}" method="POST" style="display: inline-block;">
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
