import { validarInputsDeNuevoRegistro } from "./validarInputs.js";
let login = document.getElementsByName('login')[0];
let textoError = document.getElementById('error');
let textErrorUsuario = document.getElementById('usuarioError');
let botonLogin = document.getElementById('bottonLogion');
export const expreciones = {
  email: /^[a-zA-Z0-9_.ñÑ+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  soloString: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/
}
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
login && login.email.addEventListener('click', () => {
  textoError.classList.add('hidden');
  textErrorUsuario.classList.add('hidden');

});

login && login.password.addEventListener('click', () => {
  textoError.classList.add('hidden');
});


/*---------- VALIDACION DE LOS INPUTS DE EL FORMULARIO REGISTRO.----------*/
let buttonReg = document.getElementById('buttonRegistro');

let entradaFormReg = {
  nombre: document.getElementById('regNombre'),
  apellidos: document.getElementById('regApellidos'),
  email: document.getElementById('regEmail'),

}

let mensajesYSugerencias = {
  mensajeErrorNombre: document.getElementById('mensajeNombre'),
  sugerenciaNombre: document.getElementById('sugerenciaNombre'),
  mensajeErrorApellidos: document.getElementById('mensajeApellidos'),
  sugerenciaApellidos: document.getElementById('sugerenciaApellidos')

}

/*
2-Hay que ver como funcionarioa llamar auna funcion que valide
al input osea que cuando este escribiendo se llame esa funcion que
validara si los carateres o la cadena es coresta. 
 */

entradaFormReg.nombre.addEventListener('input', function () {
  validarInputsDeNuevoRegistro(entradaFormReg.nombre.value, entradaFormReg.nombre.id);
})

//VALIDAR EL INPUT DE APELLIDOS.
entradaFormReg.apellidos.addEventListener('input', function () {
  validarInputsDeNuevoRegistro(entradaFormReg.apellidos.value, entradaFormReg.apellidos.id);
})

entradaFormReg.email.addEventListener('input', function () {
  validarInputsDeNuevoRegistro(entradaFormReg.email.value, entradaFormReg.email.id);
})




