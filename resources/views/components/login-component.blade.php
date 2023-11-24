<h2 class="mb-3 p-3">Login</h2>

<div class="d-flex justify-content-center">
    <img class="img-fluid" src="{{asset('assets/img/user.png')}}" alt="" width="40%"
        style="border-radius: 20px; opacity: .8; padding: 10px;">
</div>
<form method="POST" action="{{ route('iniciar-sesion') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="emailInput" placeholder="ejemplo@gmail.com">Correo</label>
        <input type="email" class="form-control " id="emailInput" name="email" required autocomplete="disable">
    </div>
    <div class="mb-3">
        <label class="form-label" for="passwordInput">Constraseña</label>
        <input type="password" class="form-control " id="passwordInput" name="password" required>
    </div>

    <div class="mb-3 form-check" >
        <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember" >
        <label class="form-check-label "  for="rememberCheck">mantener sesión iniciada</label>
    </div>
    {{-- <div>
        <p> <a href="{{route('registro')}}">Ir</a></p>
    </div> --}}
    <div class="d-flex justify-content-end">
        <button class="btn btn-primary mt-3 " type="submit">Enviar</button>
    </div>
</form>
