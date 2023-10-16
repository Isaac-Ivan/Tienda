

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
            'No puedes dejar vacios los campos con un<span class="fs-1"> "*"</span>',
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

    let datos =
    {
        correo: data.email,
        password: data.pwd,
        nombre: data.nombre,
        rol: 1
    }

    registerUser(datos);
}

const registerUser = (data) => {
    const requestOptions = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json', // Ajusta el tipo de contenido según tus necesidades
        },
        body: JSON.stringify(data), // Convierte el objeto de datos a una cadena JSON
    };

    fetch('http://127.0.0.1:8000/api/register-user', requestOptions)
        .then(response => {
            if (!response.ok) {
                throw new Error('La solicitud no pudo completarse correctamente.');
            }
            return response.json(); // Parsear la respuesta como JSON
        })
        .then(data => {
            console.log(data);

            alert('todo chido')

        })
        .catch(error => {
            // Manejar errores
            console.error('Error: ' + error);
        });
}
