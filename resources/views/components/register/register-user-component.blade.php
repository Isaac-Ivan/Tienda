<h2 class="mb-3 p-3">Registrar usuario</h2>

<div class="d-flex justify-content-center">
    <img class="img-fluid" src="{{ asset('assets/img/register_user.png') }}" alt="" width="40%"
        style="border-radius: 20px; opacity: .8; padding: 10px;">
</div>
<form method="POST" action="{{ route('validar-registro') }}">
    @csrf
    <div class="mb-3">
        <label for="userInput" class="form-label" placeholder="ejemplo@gmail.com">Nombre*</label>
        <input type="text" class="form-control" name="nombre" required autocomplete="disable" id="userInput">
    </div>
    <div class="mb-3">
        <label class="form-label" for="emailInput" placeholder="ejemplo@gmail.com">Correo*</label>
        <input type="email" class="form-control " id="emailInput" name="email" required autocomplete="disable">
    </div>
    <div class="mb-3">
        <label class="form-label" for="passwordInput">Constraseña*</label>
        <input type="password" class="form-control " id="passwordInput" name="password" required>
    </div>
    <div class="d-flex justify-content-end">
        <button class="btn btn-primary mt-3 " type="submit">Enviar</button>
    </div>
</form>
