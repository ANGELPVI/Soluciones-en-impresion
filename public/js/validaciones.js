// Validar los campos de inicio de sesión
let login=document.getElementsByName('login')[0];
let textoError=document.getElementById('error');
let textErrorUsuario=document.getElementById('usuarioError');
let botonLogin=document.getElementById('bottonLogion');
const expreciones={
    email: /^[a-zA-Z0-9_.ñÑ+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/
}

login.addEventListener('input', function(){
    
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


 //Quitar error de usuario o contraseñac
  login.email.addEventListener('click', ()=>{
    textoError.classList.add('hidden');
    textErrorUsuario.classList.add('hidden');

  })

  login.password.addEventListener('click', ()=>{
   textoError.classList.add('hidden');
  })