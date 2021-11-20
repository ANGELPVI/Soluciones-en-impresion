/**Bon resposivo que muestra y oculta el menu*/
const boton=document.querySelector('#navegation');
const menu=document.querySelector('#menu'); 

boton.addEventListener('click',()=>{
  menu.classList.toggle('hidden')
})