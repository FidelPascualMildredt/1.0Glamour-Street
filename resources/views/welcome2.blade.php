<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Glamour Street</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-dZwl/JaUaeg0B+WjTE1Eqcb7yfVizbR/HPGF8cY2Xa6Pf/iKKVc5FFI5oGXGGnvZ" crossorigin="anonymous">
    <!-- Styles -->


    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: #222222;
            overflow: hidden;
        }

        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        
    </style>
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                    class="font-semibold text-gray-200 hover:text-white dark:text-gray-600 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ml-8">Iniciar
                    Sesión</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
</body>

</html>
@include('layouts.app2')