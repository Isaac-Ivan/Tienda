

let x = 2;
const btnEnviar = document.getElementById('btnEnviar');

btnEnviar.addEventListener('click', () => {
    obtenerDatos();
});

function obtenerDatos() {
    const form = document.getElementById('formulario');
    const formData = new FormData(form);
    const data = {};

    formData.forEach((value, key) => {
        data[key] = value;
    });

    console.log(data);
}
