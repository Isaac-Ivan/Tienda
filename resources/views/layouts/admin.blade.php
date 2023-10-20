<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/estilos.css') }}">

</head>

<body class="container-fluid bg-person ">

    <header class="bg-header">

        <div class="row d-flex justify-content-end">
            <div class="col-sm-2 ">
                <span class=""><a class="text-white" href="" id="btnGoLogin">Login</a></span>
                <span> <a class="" href="" id="btnGoRegister"> Registrarse</a></span>
            </div>
        </div>
    </header>


    <section class="row d-flex justify-content-center" id="demo">
        <div class="col-sm-3 col-md-6 col-lg-3 border-demo">
            @yield('content')
        </div>
    </section>

</body>
<script src="{{ asset('assets/js/accesos.js') }}"></script>
<script src="{{ asset('assets/js/utils.js') }}"></script>
<script src="{{ asset('assets/js/register-user/register.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
