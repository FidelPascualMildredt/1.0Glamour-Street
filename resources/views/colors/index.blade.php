@extends('layouts.app2')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Incluye SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">

<!-- Incluye SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between mb-3 align-items-center">
            <div class="col-lg-2">
                <h5 class="card-title"></h5>
            </div>
            <div class="col-lg-10 text-end">
                <a href="{{ route('colors.create') }}" class="btn btn-primary">Agregar</a>
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

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $color->id }})">Eliminar</button>

                                                <!-- Formulario de eliminación -->
                                                <form id="deleteForm{{ $color->id }}" action="{{ route('colors.destroy', $color->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
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

    <!-- Incluye SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmDelete(colorId) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "Esta acción no se puede deshacer.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminarlo',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Si se confirma la eliminación, envía el formulario
                    document.getElementById('deleteForm' + colorId).submit();
                }
            });
        }
    </script>
@endsection
