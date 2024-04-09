<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-dmMPq6cB15PuL3oDU28P1PyoXApOz/sucBU15w/HyReVxYhPwWKcMbJpfkYWYRRZfhkiLsBeSD8LS/1D1mBVow=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Aplica el color de fondo a todo el body */
        body {
            background-color: #282b2e;
            /* Mismo color que el navbar */
            color: white;
            /* Color de texto blanco */
        }

        .navbar {
            box-shadow: 0 6px 12px rgba(143, 139, 139, 0.1);
            /* Sombras de color blanco */
        }

        /* Estilo para el container */
        .content {
            padding: 20px;
            /* Espaciado interno */
        }

        /* Estilo para el input de aumento */
        .form-control.text-white::placeholder {
            color: white;

        }

        .custom-btn-color {
            background-color: #023299;
            border-color: #023299;
        }

        .custom-btn-color:hover {
            background-color: #012785;
            border-color: #012785;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
            /* Ajusta según sea necesario */
        }

        .border-bottom {
            border-bottom: 1px solid black;
            /* Cambia a color negro */
            /* Cambia el color de la línea según sea necesario */
        }

        .pb-2 {
            padding-bottom: 0.5rem !important;
            /* Ajusta según sea necesario */
        }

        /* Estilo para la sombra negra */
        .shadow-dark {
            box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/Logo.jpeg') }}" alt="Logo" class="me-2" style="height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Buscar</button>
                </form>

                <div class="ms-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="nav-link">Iniciar Sesión</a>
                            @endauth
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
                            @endif
                        </li>
                        <!-- Icono de carrito -->
                        <div class="ms-auto">
                            <ul class="navbar-nav">
                                <!-- Otras opciones de navegación -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="bi bi-cart3"></i></a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid mt-4">
        <div class="row">











        </div>
    </div>
  





    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <span>&copy; 2024 Glamour Street</span>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        // Obtener el elemento del input de cantidad
        var cantidadInput = document.getElementById('cantidad');

        // Obtener los botones de sumar y restar
        var restarBtn = document.getElementById('restar');
        var sumarBtn = document.getElementById('sumar');

        // Agregar un evento de clic al botón de restar
        restarBtn.addEventListener('click', function() {
            // Obtener el valor actual de la cantidad
            var cantidad = parseInt(cantidadInput.value);
            // Verificar si la cantidad es mayor que 1 antes de restar
            if (cantidad > 1) {
                cantidadInput.value = cantidad - 1; // Disminuir la cantidad en 1
            }
        });

        // Agregar un evento de clic al botón de sumar
        sumarBtn.addEventListener('click', function() {
            // Obtener el valor actual de la cantidad
            var cantidad = parseInt(cantidadInput.value);
            cantidadInput.value = cantidad + 1; // Aumentar la cantidad en 1
        });
    </script>

</body>

</html>
