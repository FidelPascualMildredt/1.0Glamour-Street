@extends('layouts.app2')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between mb-3 align-items-center">
            <div class="col-lg-2">
                <h5 class="card-title"></h5>
            </div>
            <div class="col-lg-10 text-end">
                <a href="{{ route('colors.create') }}" class="btn btn-primary"> <!-- Modificado el botón para redireccionar a la ruta 'roles.create' -->
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
                                <h5 class="card-title">Lista de Colores</h5>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($colors as $color)
                                    <tr>
                                        <th scope="row">{{ $color->id }}</th>
                                        <td>{{ $color->name }}</td>
                                        <td>
                                            <a href="{{ route('colors.show', $color->id) }}" class="btn btn-primary">Ver</a>
                                            <a href="{{ route('colors.edit', $color->id) }}" class="btn btn-warning" style="background-color: #c0c0c0a0; color: #000000; border-color: #C0C0C0;">Editar</a>


                                            <form action="{{ route('colors.destroy', $color->id) }}" method="POST" style="display: inline-block;">
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
