<h2 class="mb-3 p-3">Registrar usuario</h2>

<div class="d-flex justify-content-center">
    <img class="img-fluid" src="{{asset('assets/img/register_user.png')}}" alt="" width="40%" style="border-radius: 20px; opacity: .8; padding: 10px;">
</div>
<form action="" id="formRegisterUser" style="padding: 3rem;">

    <label class="form-label" placeholder="ejemplo@gmail.com">Correo*</label>
    <input type="text" class="form-control mb-3" name="email">

    <label class="form-label" placeholder="ejemplo@gmail.com">Nombre*</label>
    <input type="text" class="form-control mb-3" name="nombre">

    <label class="form-label" placeholder="ejemplo@gmail.com">Telefono</label>
    <input type="text" class="form-control mb-3" name="telefono">

    <label class="form-label">Constraseña*</label>
    <input type="password" class="form-control mb-3" name="pwd">

    <label class="form-label">Confirmar constraseña*</label>
    <input type="password" class="form-control" name="pwd_confirm">

    <div class="d-flex justify-content-end">
        <button class="btn btn-primary mt-3 " id="btnRegistrarUsuario" type="button">Enviar</button>
    </div>
</form>
