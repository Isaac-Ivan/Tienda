<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/estilos.css') }}">

</head>

<body class="bg-person">
    <header>
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="d-flex justify-content-center">
                <img class="img-fluid" src="{{asset('assets/img/user.png')}}" alt="" width="40%" style="border-radius: 20px; opacity: .8; padding: 10px;">
            </div>
            <span class="d-flex justify-content-center" id="nombreUsuario">Usuario</span>
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">

                    <button class="list-group-item list-group-item-action py-2 ripple" id="btnInventarios" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Inventarios</span>
                    </button>
                    <button class="list-group-item list-group-item-action py-2 ripple" id="btnProveedores">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Proveedores</span>
                    </button>
                    <!-- <button class="list-group-item list-group-item-action py-2 ripple " id="btnPagos">
                        <i class="fas fa-tachometer-alt fa-fw me-3" ></i><span>Pagos</span>
                    </button> -->

                </div>
            </div>

            <div class="">
                <button class="list-group-item list-group-item-action py-2 ripple" id="btnSalir">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Salir</span>
                </button>
            </div>
        </nav>
    </header>
    <section class="container-fluid">
        @yield('content-app')
    </section>

    <footer>

    </footer>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/js/sesion.js') }}"></script>
<script src="{{ asset('assets/js/menu/inventarios/menu.js') }}"></script>
<script src="{{ asset('assets/js/utils.js') }}"></script>
<script src="{{ asset('assets/js/side-bar/botones.js') }}"></script>

</html>
