
const btnEnviar = document.getElementById('btnEnviar');
const campoFinal = document.getElementById('campoFinal');

campoFinal.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault();
        btnEnviar.click();
    }
});

btnEnviar.addEventListener('click', () => {
    obtenerData();
});

function obtenerData() {
    const form = document.getElementById('formulario');
    const formData = new FormData(form);
    const data = {};

    formData.forEach((value, key) => {
        data[key] = value;
    });
    login(data);
}


const login = (data) => {
    const requestOptions = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json', // Ajusta el tipo de contenido según tus necesidades
        },
        body: JSON.stringify(data), // Convierte el objeto de datos a una cadena JSON
    };

    fetch('http://127.0.0.1:8000/api/login', requestOptions)
        .then(response => {
            if (!response.ok) {
                throw new Error('La solicitud no pudo completarse correctamente.');
            }
            return response.json(); // Parsear la respuesta como JSON
        })
        .then(data => {
            console.log(data);
            if (data.res === "true") {
                window.location.href = "http://127.0.0.1:8000/index";
                localStorage.setItem('user', JSON.stringify(data.info));
            } else {
                Swal.fire(
                    'Upss',
                    data.msg,
                    'info'
                )
            }

        })
        .catch(error => {
            // Manejar errores
            console.error('Error: ' + error);
        });
}
