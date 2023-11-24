
//BOTONES
const btnLibros = document.getElementById('btnLibros');
const btnProveedores = document.getElementById('btnProveedores');
// const btnPagos = document.getElementById('btnPagos');
const btnCloseComponent = document.getElementsByName('btn-cancel');

//Componentes que fomran el menu en la ventana
const inventariosComponent = document.getElementById('inventariosComponent');
const proveedoresComponent = document.getElementById('proveedoresComponent');
// const pagosComponent = document.getElementById('pagosComponent');

//Acciones
btnLibros.addEventListener('click', (event) => {
    if (inventariosComponent.classList.contains('hide-window')) {
        inventariosComponent.classList.replace('hide-window', 'show-window');
        proveedoresComponent.classList.replace('show-window', 'hide-window');
    }
    event.preventDefault();
});

btnProveedores.addEventListener('click', (event) => {
    if (proveedoresComponent.classList.contains('hide-window')) {
        inventariosComponent.classList.replace('show-window', 'hide-window');
        proveedoresComponent.classList.replace('hide-window', 'show-window');
    }
    event.preventDefault();
});
btnCloseComponent[0].addEventListener('click', (event) => {
    if (inventariosComponent.classList.contains('show-window')) {
        inventariosComponent.classList.replace('show-window', 'hide-window');
    }
})
btnCloseComponent[1].addEventListener('click', (event) => {
    if (proveedoresComponent.classList.contains('show-window')) {
        proveedoresComponent.classList.replace('show-window', 'hide-window');
    }
})
