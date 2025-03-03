import { expreciones } from "./regExpresion.js";
let login = document.getElementsByName('login')[0];
let textoError = document.getElementById('error');
let textErrorUsuario = document.getElementById('usuarioError');
let botonLogin = document.getElementById('bottonLogion');

//El && evalua que el objeto login no este vacio o sea null
//Así evitamos que el codigo se detenga y no se ejecuten las otras funciones.
login && login.addEventListener('input', function () {

  if (expreciones.email.test(login.email.value) != true || login.password.value == '') {
    botonLogin.setAttribute('disabled', 'disabled');
    botonLogin.classList.remove('buttonLoginEnable')
    botonLogin.classList.add('buttonLogin')

  } else {
    botonLogin.removeAttribute('disabled');
    botonLogin.classList.remove('buttonLogin')
    botonLogin.classList.add('buttonLoginEnable')
  }
});


//Quitar error de usuario o contraseña
// 1- Hacer que se quite el error que la variable textErrorUsurio proboca por iniciar vacia.
login && login.email.addEventListener('click', () => {
  textoError.classList.add('hidden');
  textErrorUsuario && textErrorUsuario.classList.add('hidden');

});







