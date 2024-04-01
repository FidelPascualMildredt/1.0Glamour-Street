<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('components.head')
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Glamour Street</title>
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/Logo.jpeg') }}" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ asset('assets/css/sidebar-menu.css') }}" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">
    @include('components.header')
    @include('components.siderbar')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8" style="margin-top: 50px;">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Editar Producto</div>
                        <hr>
                        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Imagen</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <!-- Agregar más campos según la migración -->
                            {{-- <div class="form-group">
                                <label for="size">Talla</label>
                                <input type="text" class="form-control" id="size" name="size" value="{{ $product->size }}">
                            </div>
                            <div class="form-group">
                                <label for="color">Color</label>
                                <input type="text" class="form-control" id="color" name="color" value="{{ $product->color }}">
                            </div> --}}
                            <div class="form-group">
                                <label for="material">Material</label>
                                <input type="text" class="form-control" id="material" name="material" value="{{ $product->material }}">
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}">
                            </div>
                            <div class="form-group">
                                <label for="code">Código</label>
                                <input type="text" class="form-control" id="code" name="code" value="{{ $product->code }}">
                            </div>
                            <div class="form-group">
                                <label for="category">Categoría</label>
                                <select class="form-select" id="category" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-light"><i class="icon-lock"></i> Guardar</button>
                                <a href="{{ route('products.index') }}" class="btn btn-light">Regresar</a> <!-- Agregado botón para regresar -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.color-switcher')
    @include('components.scripts')
</body>
</html>
