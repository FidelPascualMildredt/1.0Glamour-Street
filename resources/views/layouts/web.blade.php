<!DOCTYPE html>
<html lang="es">

<head>
    @include('layouts.web.head')
</head>

<body>
    <!-- Navbar -->
    @include('layouts.web.navbar')

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


    <main class="container-fluid mt-4">
        <div class="row">
            <!-- Categorias destacadas inicia -->
            <div class="row justify-content-center">

                <hr>
                <h6>Categorias Destacadas</h6>
                <br>
                @foreach ($categories as $category)
                    <x-cards.card-featured :category="$category" />
                @endforeach
            </div>
            <!-- Categorias destacadas fin -->
            <hr><br><br>
            <hr>
            <br>


            <!-- Nav de categorías -->
            <div class="col-md-3">
                <div class="col-md-12 bg-dark p-3"
                    style="border-radius: 15px; box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.5);">
                    <h6 class="mt-3 text-light">Categorías:</h6>
                    <div class="list-group">
                        @foreach ($categories as $category)
                            <button
                                class="list-group-item list-group-item-action bg-transparent border-0 text-secondary shadow-dark"
                                data-toggle="collapse" data-target="#category-{{ $category->id }}" aria-expanded="false"
                                aria-controls="category-{{ $category->id }}">
                                {{ $category->name }}
                            </button>
                            <div class="collapse" id="category-{{ $category->id }}">
                                <div class="card card-body">
                                    {{ $category->description }}
                                </div>
                            </div>
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
                <!-- Carrusel de promociones inicia-->
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
                </div>
                <!-- Carrusel de promociones fin-->

                <!-- Lista de productos inicio-->
                <x-cards.card-main title="Productos" :items="$products"/>
                <!-- Lista de productos fin-->

            </div>
        </div>
    </main>


  <!-- Modal -->
  <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header border-bottom border-secondary">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Columna para la imagen -->
                    <div class="col-md-6">

                        {{-- <img src="{{ asset('images/' . $product->image) }}" width="100%" class="img-fluid"
                            alt="Producto"> --}}
                    </div>
                    <!-- Columna para la información -->
                    <div class="col-md-6">
                        <h2 class="item-name"></h2>
                        <p class="item-description"></p>
                        <h5>Precio: $<strong class="item-price"></strong> </h5>

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
                    </div>
                </div>
            </div>
            <div class="modal-footer border-top border-secondary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <span>&copy; 2024 Bootstrap Template</span>
        </div>
    </footer>
    <!-- Scripts -->
    @include('layouts.web.script')
</body>

</html>
