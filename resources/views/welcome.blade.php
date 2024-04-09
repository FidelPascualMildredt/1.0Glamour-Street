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


        /* Card de categorias */
        .card-container {
            width: 300px;
            height: 300px;
            position: relative;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .card {
            width: 100%;
            height: 100%;
            border-radius: inherit;
        }

        .card .front-content {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
        }

        .card .front-content img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: inherit;
        }

        .card .content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            gap: 10px;
            background-color: rgba(255, 255, 255, 0.366);
            /* Opacidad del 70% */
            color: #000;
            /* Color del texto */
            padding: 20px;
            line-height: 1.5;
            border-radius: 5px;
            pointer-events: none;
            transform: translateX(96%);
            transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
        }

        .card .content .heading {
            font-size: 32px;
            font-weight: 700;
        }

        .card:hover .content {
            transform: translateY(0);
        }

        .card:hover .front-content {
            transform: translateX(20%);
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
    <!-- Carrucel inicial -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="position: relative;">
                <img src="{{ asset('assets/images/carrusel/azu.jpg') }}" class="d-block w-100"
                    style="max-height: 350px; object-fit: cover;" alt="...">
                <div class="carousel-caption" style="position: absolute; top: 50px; left: 50px; text-align: left;">
                    <h1 style="font-family: 'Arial', sans-serif; font-style: italic; color: white;">" Glamour Street "
                    </h1>
                    <br>
                    <p style="font-family: 'Verdana', sans-serif; color: white; text-align: left;">Explora la moda con
                        estilo propio. En Glamour Street, cada pieza <br>es una expresión de tu
                        individualidad.Personaliza tu look y hazlo único. <br>¡Bienvenido al glamour!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/carrusel/azul.jpg') }}" class="d-block w-100"
                    style="max-height: 350px; object-fit: cover;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/carrusel/azules.jpg') }}" class="d-block w-100"
                    style="max-height: 350px; object-fit: cover;" alt="...">
            </div>
            <!-- Agrega más imágenes del carrusel aquí si es necesario -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carrucel fin -->


    <div class="container-fluid mt-4">
        <div class="row">

            <div class="row justify-content-center">

                <hr>
                <h6>Categorias Destacadas</h6>
                <br>
                <div class="col-md-3">
                    <div class="card-container">
                        <div class="card">
                            <div class="front-content">
                                <img src="{{ asset('assets/images/carrusel/clasico.jpg') }}" class="d-block w-100"
                                    alt="Imagen de categoría">
                            </div>
                            <div class="content">
                                <p class="heading">Estilo clásico</p>
                                <p>El estilo clásico es un estilo que no pasa de moda</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-container">
                        <div class="card">
                            <div class="front-content">
                                <img src="{{ asset('assets/images/carrusel/urbano.jpg') }}" class="d-block w-100"
                                    alt="Imagen de categoría">
                            </div>
                            <div class="content">
                                <p class="heading">Estilo Urbano</p>
                                <p>El estilo clásico es un estilo que no pasa de moda</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-container">
                        <div class="card">
                            <div class="front-content">
                                <img src="{{ asset('assets/images/carrusel/retro.jpg') }}" class="d-block w-100"
                                    alt="Imagen de categoría">
                            </div>
                            <div class="content">
                                <p class="heading">Estilo Retro</p>
                                <p>El estilo clásico es un estilo que no pasa de moda</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                    <div class="card-container">
                        <div class="card">
                            <div class="front-content">
                                <img src="{{ asset('assets/images/carrusel/minimalista.jpg') }}"
                                    class="d-block w-100" alt="Imagen de categoría">
                            </div>
                            <div class="content">
                                <p class="heading">Estilo Minimalista</p>
                                <p>El estilo clásico es un estilo que no pasa de moda</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <br>
            <br>
            <hr>
            <br>


            <!-- Sidebar con categorías -->
            <div class="col-md-3">
                <div class="col-md-12 bg-dark p-3"
                    style="border-radius: 15px; box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.5);">
                    <h6 class="mt-3 text-light">Categorías:</h6>
                    <div class="list-group">
                        @foreach ($categories as $category)
                            <a href="#"
                                class="list-group-item list-group-item-action bg-transparent border-0 text-secondary shadow-dark">{{ $category->name }}</a>
                        @endforeach
                    </div>
                    <hr>
                    <h6 class="mt-3 text-light">Tallas:</h6>
                    <div class="list-group">
                        <a href="#"
                            class="list-group-item list-group-item-action bg-transparent border-0 text-secondary shadow-dark">XS</a>
                        <a href="#"
                            class="list-group-item list-group-item-action bg-transparent border-0 text-secondary shadow-dark">S</a>
                        <a href="#"
                            class="list-group-item list-group-item-action bg-transparent border-0 text-secondary shadow-dark">M</a>
                        <a href="#"
                            class="list-group-item list-group-item-action bg-transparent border-0 text-secondary shadow-dark">L</a>
                        <!-- Agrega más tallas según sea necesario -->
                    </div>
                </div>

            </div>




            <!-- Carrusel de promociones y Productos -->
            <div class="col-md-9">
                <div class="col-md-12 text-center">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"
                        style="max-width: 800px; margin: 0 auto; border-radius: 10px;box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.5); margin-bottom: 50px;">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{ asset('assets/images/carrusel/descuentos (1).jpg') }}"
                                    class="d-block w-100"
                                    style="max-height: 250px; object-fit: cover; border-radius: 10px;" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('assets/images/carrusel/des.jpg') }}" class="d-block w-100"
                                    style="max-height: 250px; object-fit: cover; border-radius: 10px;" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/carrusel/desc.jpg') }}" class="d-block w-100"
                                    style="max-height: 250px; object-fit: cover; border-radius: 10px;" alt="...">
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4 class="text-secondary mb-4"
                        style="border-bottom: 1px solid #1e1d1d; padding-bottom: 10px; font-family: 'Montserrat', sans-serif;">
                        Productos</h4>
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-md-4 mb-3">
                                <div class="card bg-transparent border-0">
                                    <img src="{{ asset('assets/images/carrusel/pantalon.jpg') }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body p-0 ">
                                        <h5 class="card-title text-white">{{ $product->name }}</h5>
                                        <p class="card-text text-white">{{ $product->description }}</p>
                                        <p class="card-text text-white">Precio: ${{ $product->price }}</p>
                                        <!-- Íconos de estrellas para calificación -->
                                        <div class="d-flex justify-content-center align-items-center">
                                            @for ($i = 0; $i < 5; $i++)
                                                @if ($i < $product->rating)
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                @else
                                                    <i class="bi bi-star text-warning"></i>
                                                @endif
                                            @endfor
                                        </div>
                                        <a href="#" class="btn btn-primary custom-btn-color"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">+ Agregar</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header border-bottom border-secondary">
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
                            <h2>{{ $product->name }}</h2>
                            <p>{{ $product->description }}</p>
                            <h5>Precio: ${{ $product->price }}</h5>

                            <form action="{{ route('orders.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="color" class="form-label text-white">Color:</label>
                                    @foreach ($colors as $color)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="color[]"
                                                value="{{ $color->id }}" id="color{{ $color->id }}">
                                            <label class="form-check-label text-white"
                                                for="color{{ $color->id }}">
                                                {{ $color->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="mb-3">
                                    <label for="size" class="form-label text-white">Talla:</label>
                                    @foreach ($sizes as $size)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="size[]"
                                                value="{{ $size->id }}" id="size{{ $size->id }}">
                                            <label class="form-check-label text-white" for="size{{ $size->id }}">
                                                {{ $size->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

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
                                <a href="{{ route('carrito') }}" class="btn btn-primary">Agregar al Carrito</a>


                                {{-- <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="btn btn-primary">Agregar al Carrito</button> --}}
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-top border-secondary">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal content -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <span>&copy; 2024 Bootstrap Template</span>
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
