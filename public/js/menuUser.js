// Activar el menu de usuario
const userMenu=document.getElementById('userMenu');
let optionUser=document.getElementById('optionUser');
userMenu && userMenu.addEventListener('click', ()=>{
  optionUser.classList.toggle('hidden');
      
})