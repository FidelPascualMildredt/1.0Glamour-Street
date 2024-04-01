{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('components.head')
</head>
<body class="bg-theme bg-theme1">
    @include('components.header')

    @include('components.siderbar')

    @yield('content')

    @include('components.footer')

    @include('components.color-switcher')

    @include('components.scripts')
</body>
</html> --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('components.head')
    
</head>
<body class="bg-theme bg-theme1">
    @include('components.header')
    @include('components.siderbar')

    <div class="container-fluid">
        <div class="row justify-content-center mt-4">
            @yield('content')
        </div>
    </div>

    {{-- @include('components.footer') --}}
    @include('components.color-switcher')
    @include('components.scripts')
</body>
</html>
