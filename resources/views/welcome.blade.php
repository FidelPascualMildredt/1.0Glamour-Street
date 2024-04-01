<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Template</title>
    <!-- Bootstrap CSS -->
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
            box-shadow: 0 6px 12px rgba(255, 255, 255, 0.1);
            /* Sombras de color blanco */
        }

        /* Estilo para el container */
        .content {
            padding: 20px;
            /* Espaciado interno */
        }

        /* Estilo para el input de aunmento */
        .form-control.text-white::placeholder {
            color: white;
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
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Carrusel -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('assets/images/carrusel/woman.jpg') }}" class="d-block w-100"
                    style="width: 500px; height: 300px;" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('assets/images/carrusel/mujer.jpg') }}" class="d-block w-100"
                    style="width: 500px; height: 300px;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/carrusel/deportivo.jpg') }}" class="d-block w-100"
                    style="width: 500px; height: 300px;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/carrusel/pantalon.jpg') }}" class="d-block w-100"
                    style="width: 500px; height: 300px;" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Botones de Categorías -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h6>Categorías:</h6>
                <div class="btn-group" role="group" aria-label="Categorías">
                    @foreach ($categories as $category)
                        <a href="#" class="btn btn-dark"
                            style="background-color: #333333; color: #c0c0c0;">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <!-- Card -->
    <div class="container mt-4">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-3">
                    <div class="card bg-dark text-white shadow-sm" style="width: 18rem;">
                        <img src="{{ asset('assets/images/carrusel/pantalon.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">Precio: ${{ $product->price }}</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">+ Agregar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header border-bottom border-secondary">
                    {{-- <h3 class="modal-title text-center" id="exampleModalLabel">{{ $product->name }}</h3> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Columna para la imagen -->
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/carrusel/deportivo.jpg') }}" class="img-fluid"
                                alt="Producto">
                        </div>
                        <!-- Columna para la información -->
                        <div class="col-md-6">
                            @foreach($products as $product)
                            <!-- Agrega aquí los detalles específicos del producto -->
                            <h2>{{ $product->name }}</h2>
                            <p>{{ $product->description }}</p>
                            <p>Color: {{ $product->color }}</p>
                            <p>Talla: {{ $product->size }}</p>
                            <p>Material: {{ $product->material }}</p>
                            <h5>Precio: ${{ $product->price }}</h5>
                            <!-- Puedes agregar más detalles según sea necesario -->

                            @endforeach
                            <!-- Campo de cantidad -->
                            <div class="mb-3">
                                <label for="cantidad" class="form-label text-white">Cantidad:</label>
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary text-white" type="button"
                                        id="restar">-</button>
                                    <input type="number" class="form-control bg-dark text-white" id="cantidad"
                                        value="1">
                                    <button class="btn btn-outline-secondary text-white" type="button"
                                        id="sumar">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-top border-secondary">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>







    <!-- Footer -->
    {{-- <footer class="footer">
        <div class="container text-center">
            <span>&copy; 2024 Bootstrap Template</span>
        </div>
    </footer> --}}

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
