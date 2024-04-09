@extends('layouts.app2')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between mb-3 align-items-center">
            <div class="col-lg-2">
                <h5 class="card-title"></h5>
            </div>
            <div class="col-lg-10 text-end">
                <a href="{{ route('sizes.create') }}" class="btn btn-primary">Agregar</a>
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
                                            <a href="{{ route('sizes.edit', $size->id) }}" class="btn btn-warning">Editar</a>

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $size->id }})">
                                                Eliminar
                                            </button>

                                            <!-- Formulario de eliminación -->
                                            <form id="deleteForm{{ $size->id }}" action="{{ route('sizes.destroy', $size->id) }}" method="POST" style="display: none;">
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
        function confirmDelete(sizeId) {
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
                    
                    document.getElementById('deleteForm' + sizeId).submit();
                }
            });
        }
    </script>
@endsection
