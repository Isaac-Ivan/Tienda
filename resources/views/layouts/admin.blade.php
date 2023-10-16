<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/estilos.css') }}">

</head>

<body class="bg-person container-fluid">
    <header>
        <div class="row ">
            <div class="d-flex justify-content-end">
                <a class="text-muted" href="">Login</a>
                <a class="text-muted" href="">Registrar</a>
            </div>
        </div>

    </header>


    <div class="row d-flex justify-content-center " id="demo">
        <div class="col-sm-3 col-md-6 col-lg-3 border-demo">
            @yield('content')
        </div>
    </div>

</body>
<script src="{{ asset('assets/js/accesos.js') }}"></script>
<script src="{{ asset('assets/js/register-user/register.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>
