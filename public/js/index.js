// Activar el menu de usuario
const userMenu=document.getElementById('userMenu');
let optionUser=document.getElementById('optionUser');
userMenu.addEventListener('click', ()=>{
  optionUser.classList.toggle('hidden');
      
})


//Funcion que rellena el select del los estados
let select=document.getElementById('estados');
let SelectMunicipios=document.getElementById('municipios');
let municipios=[];

function estados(){
   fetch('js/estados-municipios.json')
   .then(respuesta => respuesta.json())
   .then(respuesta=>{
      municipios=respuesta
      Object.entries(respuesta).forEach(([key]) => {
      let option = document.createElement("option"); 
      option.value =`${key}`;
      option.text =`${key}`;
      select.appendChild(option);
      
   })})
      
}
estados();
// Funcion que busca los municipios al seleccionar un estado
select.addEventListener('change', function(){
  SelectMunicipios.innerHTML=`<option>Seleccione un municipio</option>`
    municipios[select.value].forEach(municipio=>{
       SelectMunicipios.innerHTML+= `<option value="${municipio}">${municipio}</option>`
    })
  
  
})


/**Bon resposivo que muestra y oculta el menu*/
const boton=document.querySelector('#navegation');
const menu=document.querySelector('#menu'); 

boton.addEventListener('click',()=>{
  menu.classList.toggle('hidden')
})

// Validar los campos de inicio de sesión
let login=document.getElementsByName('login')[0];
let textoError=document.getElementById('error');
let textErrorUsuario=document.getElementById('usuarioError');
const expreciones={
    email: /^[a-zA-Z0-9_.ñÑ+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/
}


login.addEventListener('submit', e=>{
  if(login.email.value==''||expreciones.email.test(login.email.value)!=true||login.password.value==''){
    textoError.classList.remove('hidden');
    e.preventDefault();
  } 

 })

 //Quitar error de usuario o contraseña
 login.email.addEventListener('click', ()=>{
   textoError.classList.add('hidden');
   textErrorUsuario.classList.add('hidden');

 })

 login.password.addEventListener('click', ()=>{
  textoError.classList.add('hidden');
})



 




