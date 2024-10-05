/*organizar los archivos para que el codigo sea mas lejible*/
//import { document } from "postcss";
import { expreciones } from "./regExpresion.js";

let mensajesYSugerencias = {
  mensajeErrorNombre: document.getElementById('mensajeNombre'),
  sugerenciaNombre: document.getElementById('sugerenciaNombre'),
  mensajeErrorApellidos: document.getElementById('mensajeApellidos'),
  sugerenciaApellidos: document.getElementById('sugerenciaApellidos'),
  mensajeErrorEmail: document.getElementById('mensajeEmail'),
  sugerenciaEmail: document.getElementById('sugerenciaEmail'),
  mensajeErrorPasword: document.getElementById('mensajePass'),
  mensajeErrorTel: document.getElementById('mensajeTel'),
  sugerenciaTel: document.getElementById('sugerenciaTel')


}



export function validarInputsDeNuevoRegistro(valor, id) {
    /*Validar existencia, tipo de dato, longitud y duplicación la duplicacion
      es para el email y telefono*/     
    
    if (id == 'regNombre') {
      if (valor == '' || valor.length > 26 || expreciones.soloString.test(valor) != true) {
        mensajesYSugerencias.mensajeErrorNombre.classList.remove('hidden');
        mensajesYSugerencias.sugerenciaNombre.classList.remove('hidden');
  
  
      } else {
        mensajesYSugerencias.mensajeErrorNombre.classList.add('hidden');
        mensajesYSugerencias.sugerenciaNombre.classList.add('hidden');
  
      }
    }
  
    if (id == 'regApellidos') {
      if (valor == '' || valor.length >= 35 || expreciones.soloString.test(valor) != true) {
        console.log('se bloquea');
        mensajesYSugerencias.mensajeErrorApellidos.classList.remove('hidden');
        mensajesYSugerencias.sugerenciaApellidos.classList.remove('hidden');
  
      } else {
        mensajesYSugerencias.mensajeErrorApellidos.classList.add('hidden');
        mensajesYSugerencias.sugerenciaApellidos.classList.add('hidden');
  
      }
    }
  
  
    if (id=='regEmail'){
      if (valor.length == '' || valor.length > 40 || expreciones.email.test(valor) != true) {
        mensajesYSugerencias.mensajeErrorEmail.classList.remove('hidden');
        mensajesYSugerencias.sugerenciaEmail.classList.remove('hidden');
      } else {
        mensajesYSugerencias.mensajeErrorEmail.classList.add('hidden');
        mensajesYSugerencias.sugerenciaEmail.classList.add('hidden');
      }
      
    }
      //Analisas si es mejor poner el total de longitud de carateres en en las expresiones regulares de soloString
    if (id=='regPassword') {
      if (expreciones.password.test(valor) != true) {
        mensajesYSugerencias.mensajeErrorPasword.classList.remove('hidden');

      }else{
        mensajesYSugerencias.mensajeErrorPasword.classList.add('hidden')
                
      }    
      
    }

    if (id=='regTel') {
      console.log(valor);
      
      if (expreciones.telefono.test(valor)==true) {
        mensajesYSugerencias.mensajeErrorTel.remove('hidden');
        mensajesYSugerencias.sugerenciaTel.remove('hidden');
        
      } else {
        mensajesYSugerencias.mensajeErrorTel.add('hidden');
        mensajesYSugerencias.sugerenciaTel.add('hidden');
        
        
      }
     
    }

    if (id=='regCP') {
      console.log('Se valida el CP');
    }

    if (id=='regColonia') {
      console.log('Se valida la colonia');
      
    }

    if (id=='regCalle') {
      console.log('se valida la calle');
      
      
    }
  
  }