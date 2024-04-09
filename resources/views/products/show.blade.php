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
                        <h5 class="card-title">Detalles del Producto</h5>
                        <hr>
                        <dl class="row">
                            <dt class="col-sm-4">Nombre:</dt>
                            <dd class="col-sm-8">{{ $product->name }}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-4">Descripción:</dt>
                            <dd class="col-sm-8">{{ $product->description }}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-4">Precio:</dt>
                            <dd class="col-sm-8">{{ $product->price }}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-4">Imagen:</dt>
                            <img src="{{ asset('images/' . $product->image) }}" width="30%">
                        </dl>
                        <!-- Agregar más detalles según sea necesario -->
                        {{-- <dl class="row">
                            <dt class="col-sm-4">Talla:</dt>
                            <dd class="col-sm-8">{{ $product->size }}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-4">Color:</dt>
                            <dd class="col-sm-8">{{ $product->color }}</dd>
                        </dl> --}}
                        <dl class="row">
                            <dt class="col-sm-4">Material:</dt>
                            <dd class="col-sm-8">{{ $product->material }}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-4">Stock:</dt>
                            <dd class="col-sm-8">{{ $product->stock }}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-4">Código:</dt>
                            <dd class="col-sm-8">{{ $product->code }}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-4">Categoría:</dt>
                            <dd class="col-sm-8">{{ $product->category->name }}</dd>
                        </dl>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <a href="{{ route('products.index') }}" class="btn btn-light">Regresar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.color-switcher')
    @include('components.scripts')
</body>
</html>
