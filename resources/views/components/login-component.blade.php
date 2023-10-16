
        <h2 class="mb-3 p-3">Iniciar sesion</h2>

        <div class="d-flex justify-content-center" >
            <img class="img-fluid" src="{{asset('assets/img/user.png')}}" alt="" width="40%" style="border-radius: 20px; opacity: .8; padding: 10px;">
        </div>
        <form action="" id="formulario" style="padding: 3rem;">

            <label class="form-label" placeholder="ejemplo@gmail.com">Correo</label>
            <input type="text" class="form-control mb-3" name="email">

            <label class="form-label">Constraseña</label>
            <input type="password" class="form-control" name="pwd" id="campoFinal">

            <div class="d-flex justify-content-end">
                <button class="btn btn-primary mt-3 " id="btnEnviar" type="button">Enviar</button>
            </div>
        </form>
