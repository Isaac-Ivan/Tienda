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
                <a href="#" class="d-block text-light p-3"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                        <path
                            d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                    </svg></i>
                    Libros</a>
                <a href="#" class="d-block text-light p-3">Cuadernos </a>
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
