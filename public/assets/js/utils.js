

const btnGoLogin = document.getElementById('btnGoLogin');
const btnGoRegister = document.getElementById('btnGoRegister');
const loginComponent = document.getElementById('showLogin');
const registerComponent = document.getElementById('showRegister');



btnGoLogin.addEventListener('click', (event) => {
    registerComponent.classList.replace('show-window', 'hide-window');
    loginComponent.classList.replace('hide-window', 'show-window');
    event.preventDefault();
});

btnGoRegister.addEventListener('click', (event) => {
    loginComponent.classList.replace('show-window', 'hide-window');
    registerComponent.classList.replace('hide-window', 'show-window');
    event.preventDefault();
});



