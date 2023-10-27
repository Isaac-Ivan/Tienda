
let info = JSON.parse(localStorage.getItem('user'));

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
};
sesion();
