@extends('layouts.app2')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between mb-3 align-items-center">
            <div class="col-lg-2">
                <h5 class="card-title"></h5>
            </div>
            <div class="col-lg-10 text-end">
                <a href="{{ route('products.create') }}" class="btn btn-primary"> <!-- Modificado el botón para redireccionar a la ruta 'products.create' -->
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
                                <h5 class="card-title">Productos</h5>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Material</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Código</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->price }}</td>

                                        <td><img src="{{ asset('images/' . $product->image) }}" width="150%"></td>
                                        {{-- <td>{{ $product->size }}</td>
                                        <td>{{ $product->color }}</td> --}}
                                        <td>{{ $product->material }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>
                                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Ver</a>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
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
