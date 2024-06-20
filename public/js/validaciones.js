// Validar los campos de inicio de sesión
let login = document.getElementsByName('login')[0];
let textoError = document.getElementById('error');
let textErrorUsuario = document.getElementById('usuarioError');
let botonLogin = document.getElementById('bottonLogion');
const expreciones = {
  email: /^[a-zA-Z0-9_.ñÑ+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  soloString: /^[a-zA-Z\s]+$/
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

// VALIDACION DE LOS INPUTS DE EL FORMULARIO REGISTRO. 
let buttonReg = document.getElementById('buttonRegistro');
//Objeto que guarda todos los valores que reciba el formulario de registro.
let entradaFormReg = {
  nombre: document.getElementById('regNombre'),
  apellidos: document.getElementById('regApellidos')
  
}

let mensajeErrorNombre=document.getElementById('mensajeNombre');
let sugerenciaNombre=document.getElementById('sugerenciaNombre');

let mensajeErrorApellidos=document.getElementById('mensajeNombre');
let sugerenciaApellidos=document.getElementById('sugerenciaNombre');

entradaFormReg.nombre.addEventListener('input', function(){
  //Validar existencia, tipo de dato, longitud y duplicación.
  if (entradaFormReg.nombre.value.length <=2 || entradaFormReg.nombre.value.length >= 26 || expreciones.soloString.test(entradaFormReg.nombre.value)!=true) {
    console.log('se bloquea');
    mensajeErrorNombre.classList.remove('hidden');
    sugerenciaNombre.classList.remove('hidden');



  } else {
    console.log('se desbloquea');
    mensajeErrorNombre.classList.add('hidden');
    sugerenciaNombre.classList.add('hidden');

  }
})

//VALIDAR EL INPUT DE APELLIDOS.
entradaFormReg.apellidos.addEventListener('input', function(){
  if (entradaFormReg.apellidos.value.length <=2 || entradaFormReg.apellidos.value.length >= 35 || expreciones.soloString.test(entradaFormReg.apellidos.value)!=true) {
    console.log('se bloquea');
    mensajeErrorApellidos.classList.remove('hidden');
    sugerenciaApellidos.classList.remove('hidden');



  } else {
    console.log('se desbloquea');
    mensajeErrorApellidos.classList.add('hidden');
    sugerenciaApellidos.classList.add('hidden');

  }
  
})

