<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Bootstrap Template</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-dmMPq6cB15PuL3oDU28P1PyoXApOz/sucBU15w/HyReVxYhPwWKcMbJpfkYWYRRZfhkiLsBeSD8LS/1D1mBVow=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">

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

@livewireStyles
