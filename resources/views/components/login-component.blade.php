<div class="row d-flex justify-content-center " id="demo">
            <div class="col-sm-3 border-demo">
                <h2 class="mb-3">Iniciar sesion</h2>

                <div class="d-flex justify-content-center" style="margin-bottom: 2rem;">
                    <img class="img-fluid" src="{{asset('assets/img/user.png')}}" alt="" width="30%" style="border-radius: 20px; opacity: .8; padding: 10px;">
                </div>
                <form action="" id="formulario" style="padding: 3rem;">

                    <label class="form-label" placeholder="ejemplo@gmail.com">Correo</label>
                    <input type="text" class="form-control mb-3" name="email">

                    <label class="form-label">Constraseña</label>
                    <input type="password" class="form-control" name="pwd">

                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary mt-3 " id="btnEnviar" type="button">Enviar</button>
                    </div>
                </form>

            </div>
        </div>
