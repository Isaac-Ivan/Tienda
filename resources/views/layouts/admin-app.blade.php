<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libro</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="bg-person">
    {{-- <header>
        <div class="d-flex justify-content-end">
            <a href="{{ route('logout') }}">
                <button class="btn btn-primary">Salir</button>
            </a>
        </div>
    </header> --}}
    <div class="d-flex">
        <div class="bg-primary" id="sidebar-container">
            <div class="logo">
                <h4 class="text-light font-weight-bold">LibrITTLA</h4>
            </div>
            <div class="menu">
                <a href="#" class="d-block text-light p-3"> Libros</a>
                <a href="#" class="d-block text-light p-3">Cuadernos</a>
                <a href="#" class="d-block text-light p-3">Proveedores</a>
                <a href="#" class="d-block text-light p-3">Clientes</a>
                <a href="#" class="d-block text-light p-3">Pedidos</a>
            </div>
        </div>
        @yield('content-app')
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
