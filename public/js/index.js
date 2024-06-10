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





 




