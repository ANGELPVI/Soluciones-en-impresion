// Validar los campos de inicio de sesión
let login=document.getElementsByName('login')[0];
let textoError=document.getElementById('error');
let textErrorUsuario=document.getElementById('usuarioError');
let botonLogin=document.getElementById('bottonLogion');
const expreciones={
    email: /^[a-zA-Z0-9_.ñÑ+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/
}
//El && evalua que el objeto login no este vacio o sea null
//Así evitamos que el codigo se detenga y no se ejecuten las otras funciones.
login && login.addEventListener('input', function(){
    
  if(expreciones.email.test(login.email.value)!=true||login.password.value==''){
    botonLogin.setAttribute('disabled','disabled');
    botonLogin.classList.remove('buttonLoginEnable')
    botonLogin.classList.add('buttonLogin')

  }else{
    botonLogin.removeAttribute('disabled');
    botonLogin.classList.remove('buttonLogin')
    botonLogin.classList.add('buttonLoginEnable')    
  }
    
 
  
});


 //Quitar error de usuario o contraseña
  login && login.email.addEventListener('click', ()=>{
    textoError.classList.add('hidden');
    textErrorUsuario.classList.add('hidden');

  })

  login && login.password.addEventListener('click', ()=>{
   textoError.classList.add('hidden');
  })

  // VALIDACION DE LOS INPUTS DE EL FORMULARIO REGISTRO. 
 let formularioRegistro=document.getElementsByName('registro')[0];

 formularioRegistro.addEventListener('input', function(){
  //Objeto que guarda todos los valores que reciva el formulario de registro.
  let entradaFormReg={
    nombre:nombre=formularioRegistro.nombre.value.length,
    apellidos:nombre=formularioRegistro.apellidos.value.length,
  }
  
  if (entradaFormReg.nombre>=4 && entradaFormReg.apellidos>=4) {
    console.log('Esta bien');
  }else{
    console.log('Faltan letras');
  }
  
      
      
   
   //console.log(formularioRegistro.apellidos.value);

 });
