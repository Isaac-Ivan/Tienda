<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

</head>

<body class="container-fluid bg-person ">

    {{-- <header class="bg-header">

        <div class="row d-flex justify-content-end">
            <div class="col-sm-2 ">
                <span class=""><a class="text-white" href="" id="btnGoLogin">Login</a></span>
                <span> <a class="" href="" id="btnGoRegister"> Registrarse</a></span>
            </div>
        </div>
    </header> --}}


    <section class="row d-flex justify-content-center" id="demo">
        <div class="col-sm-3 col-md-6 col-lg-3 border-demo">
            @yield('content')
        </div>
    </section>

    <script href="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
