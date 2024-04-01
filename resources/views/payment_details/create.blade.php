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
            <div class="col-lg-6" style="margin-top: 50px;"> <!-- Agregamos margen superior -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Crear Detalles de Pago</div>
                        <hr>
                        <form method="POST" action="{{ route('payment_details.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="user_id">Usuario</label>
                                <select class="form-control" id="user_id" name="user_id">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="payment_id">Pago</label>
                                <select class="form-control" id="payment_id" name="payment_id">
                                    @foreach($payments as $payment)
                                        <option value="{{ $payment->id }}">{{ $payment->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="details">Detalles</label>
                                <textarea class="form-control" id="details" name="details" rows="3"
                                    placeholder="Introduzca los detalles del pago"></textarea>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-light"><i class="icon-lock"></i> Guardar</button>
                                <a href="{{ route('payment_details.index') }}" class="btn btn-light"><i class="icon-arrow-left"></i> Regresar</a>
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
