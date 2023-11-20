
let info = JSON.parse(localStorage.getItem('user'));
let btnSalir = document.getElementById('btnSalir');
let campoNombre = document.getElementById('nombreUsuario');

const sesion = () => {
    if (info === null) {
        Swal.fire(
            'Ups...',
            'Parece que la sesion finalizo, inicia sesion nuevamente.',
            'info'
        );
        setTimeout(() => {
            window.location.href = 'http://127.0.0.1:8000/';
        }, 1500);
    };
    campoNombre.innerHTML = info.nombre;
};

btnSalir.addEventListener('click', (event) => {
    Swal.fire({
        title: '¿Seguro que quieres salir?',
        showDenyButton: true,
        confirmButtonText: 'Confirmar',
        denyButtonText: `Cancelar`,
    }).then((result) => {
        if (result.isConfirmed) {
            localStorage.removeItem('user');
            sesion();
        } else if (result.isDenied) {
           return
        }
    })
});


sesion();
