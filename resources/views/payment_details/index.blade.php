@extends('layouts.app2')

@section('content')
    <div class="container mt-5">
         <!-- Agregar código para mostrar mensajes de éxito -->
         @if (session('success'))
         <div class="row justify-content-center mb-3">
             <div class="col-lg-8">
                 <div id="successAlert" class="alert alert-success alert-dismissible fade show d-flex justify-content-center align-items-center"
                     role="alert" style="max-width: 700px; height: 60px;">
                     <div class="text-center">
                         {{ session('success') }}
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>
                 </div>
             </div>
         </div>
     @endif
     <!-- Fin del código para mostrar mensajes de éxito -->
        <div class="row justify-content-between mb-3 align-items-center">
            <div class="col-lg-2">
                <h5 class="card-title"></h5>
            </div>
            <div class="col-lg-10 text-end">
                <a href="{{ route('payment_details.create') }}" class="btn btn-primary"> <!-- Modificado el botón para redireccionar a la ruta 'payment_details.create' -->
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
                                <h5 class="card-title">Detalles de Pago</h5>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Pago</th>
                                        <th scope="col">Detalles</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($paymentDetails as $paymentDetail)
                                    <tr>
                                        <th scope="row">{{ $paymentDetail->id }}</th>
                                        <td>{{ $paymentDetail->user->name }}</td>
                                        <td>{{ $paymentDetail->payment->name }}</td>
                                        <td>{{ $paymentDetail->details }}</td>
                                        <td>
                                            {{-- <a href="{{ route('payment_details.show', $paymentDetail->id) }}" class="btn btn-primary">Ver</a> --}}
                                            {{-- <a href="{{ route('payment_details.edit', $paymentDetail->id) }}" class="btn btn-warning" style="background-color: #c0c0c0a0; color: #000000; border-color: #C0C0C0;">Editar</a> --}}

                                            <form action="{{ route('payment_details.destroy', $paymentDetail->id) }}" method="POST" style="display: inline-block;">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Función para ocultar la alerta después de 30 segundos
        window.setTimeout(function() {
            $("#successAlert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 10000);

        function confirmDelete(roleId) {
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
                    document.getElementById('deleteForm' + roleId).submit();
                }
            });
        }

        function confirmDelete(roleId) {
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
                    document.getElementById('deleteForm' + roleId).submit();
                }
            });
        }
    </script>
@endsection
