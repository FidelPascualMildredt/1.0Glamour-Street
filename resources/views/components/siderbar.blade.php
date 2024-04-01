<div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a href="index.html">
                <img src="assets/images/Logo.jpeg" class="logo-icon" alt="logo icon">
                <h5 class="logo-text">GlamourStreet Admin</h5>
            </a>
        </div>
        <ul class="sidebar-menu do-nicescrol">
            <li class="sidebar-header">NAVIGACIÓN PRINCIPAL</li>
            <li>
                <a href="dashboard">
                    <i class="zmdi zmdi-view-dashboard"></i> <span>Panel</span>
                </a>
            </li>

            <li>
                <a href="{{ route('roles.index') }}">
                    <i class="zmdi zmdi-invert-colors"></i> <span>Rol</span>
                </a>
            </li>

            <li>
                <a href="{{ route('users.index') }}">
                    <i class="zmdi zmdi-format-list-bulleted"></i> <span>Usuarios</span>
                </a>
            </li>

            <li>
                <a href="{{ route('products.index') }}">
                    <i class="zmdi zmdi-grid"></i> <span>Productos</span>
                </a>
            </li>

            <li>
                <a href="{{ route('orders.index') }}">
                    <i class="zmdi zmdi-calendar-check"></i> <span>Pedidos</span>
                    {{-- <small class="badge float-right badge-light">New</small> --}}
                </a>
            </li>

            <li>
                <a href="{{ route('categories.index') }}">
                    <i class="zmdi zmdi-face"></i> <span>Categorias</span>
                </a>
            </li>
            <li>
                <a href="{{ route('payment_details.index') }}">
                    <i class="zmdi zmdi-face"></i> <span>Detalles de pago</span>
                </a>
            </li>
            <li>
                <a href="{{ route('order_details.index') }}">
                    <i class="zmdi zmdi-face"></i> <span>Detalles de Pedido</span>
                </a>
            </li>
            <li>
                <a href="{{ route('payments.index') }}">
                    <i class="zmdi zmdi-face"></i> <span>Pago</span>
                </a>
            </li>

            <li>
                <a href="login" target="_blank">
                    <i class="zmdi zmdi-lock"></i> <span>Login</span>
                </a>
            </li>

            <li>
                <a href="register" target="_blank">
                    <i class="zmdi zmdi-account-circle"></i> <span>Registro</span>
                </a>
            </li>
        </ul>

    </div>
    <!--End sidebar-wrapper-->
