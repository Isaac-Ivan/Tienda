const btnRegistroUser = document.getElementById('btnRegistrarUsuario');
btnRegistroUser.addEventListener('click', () => {
    obtenerDatos();
});

function obtenerDatos() {
    const formRegisterUser = document.getElementById('formRegisterUser');
    const formData = new FormData(formRegisterUser);
    const data = {};

    formData.forEach((value, key) => {
        data[key] = value;
    });

    if (data.email === '' || data.nombre === '' || data.pwd === '') {
        Swal.fire(
            'Ups...',
            'No puedes dejar los campos con un * vacios',
            'info'
        )
        return
    }

    if (data.pwd != data.pwd_confirm) {
        Swal.fire(
            'Ips...',
            'Las contraseñas deben coincidir',
            'info'
        );
        return;
    }
    console.log(data)
}
