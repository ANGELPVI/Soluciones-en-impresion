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
let formularioRegistro = document.getElementsByName('registro')[0];
let buttonReg = document.getElementById('buttonRegistro');

//Objeto que guarda todos los valores que reciva el formulario de registro.
let entradaFormReg = {
  nombre: document.getElementsByName('nombre'),
  apellidos: formularioRegistro.apellidos.value,
  email: formularioRegistro.email.value,
  password: formularioRegistro.password.value,
  telefono: formularioRegistro.telefono.value,
  estado: formularioRegistro.estado.value,
  ciudad: formularioRegistro.ciudad.value,
  postal: formularioRegistro.cp.value,
  colonia: formularioRegistro.colonia.value,
  calle: formularioRegistro.calle.value
}

let mensajeErrorNombre=document.getElementById('mensajeNombre');
let sugerenciaNombre=document.getElementById('sugerenciaNombre');

entradaFormReg.addEventListener('input',function(){
  console.log(entradaFormReg.nombre);
})

/*formularioRegistro.addEventListener('input', function () {
  

  //Validar existencia, tipo de dato, longitud y duplicación.
  if (entradaFormReg.nombre.length <=2 || entradaFormReg.nombre.length >= 26 || expreciones.soloString.test(entradaFormReg.nombre)!=true) {
    console.log('se bloquea');
    mensajeErrorNombre.classList.remove('hidden');
    sugerenciaNombre.classList.remove('hidden');



  } else {
    console.log('se desbloquea');
    mensajeErrorNombre.classList.add('hidden');
    sugerenciaNombre.classList.add('hidden');

  }

})*/
