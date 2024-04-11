<!DOCTYPE html>
<html lang="es">

<head>
    @include('layouts.web.head')
</head>

<body>
    <!-- Navbar -->
    @include('layouts.web.navbar')

    <main class="container mt-3">
        <h4 class="mb-3">Carrito de compras</h4>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio Unitario</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Gorra negra</th>
                <td>1</td>
                <td>$230.00</td>
                <td>$230.00</td>
              </tr>
              <tr>
                <th scope="row">Panst Deportivo Largo</th>
                <td>2</td>
                <td>$180.00</td>
                <td>$360.00</td>
              </tr>
              <tr>
                <th scope="row">Mochila estilo militar GR</th>
                <td>1</td>
                <td>$568.30</td>
                <td>$568.30</td>
              </tr>
            </tbody>
        </table>

        <div class="row mt-4">
            <div class="col-5">
                <table class="table">
                    <tbody>
                      <tr>
                        <th scope="row">Subtotal</th>
                        <td>$1,158.30</td>
                      </tr>
                      <tr>
                        <th scope="row">IVA</th>
                        <td>$130.00</td>
                      </tr>
                      <tr>
                        <th scope="row">Total</th>
                        <td>$1,288.30</td>
                      </tr>
                    </tbody>
                </table>

                <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-primary" type="button">Comprar</button>
                  </div>
            </div>
        </div>


    </main>


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
