/*organizar los archivos para que el codigo sea mas lejible*/
import { expreciones } from "./regExpresion.js";

let mensajesYSugerencias = {
  mensajeErrorNombre: document.getElementById('mensajeNombre'),
  sugerenciaNombre: document.getElementById('sugerenciaNombre'),
  mensajeErrorApellidos: document.getElementById('mensajeApellidos'),
  sugerenciaApellidos: document.getElementById('sugerenciaApellidos'),
  mensajeErrorEmail: document.getElementById('mensajeEmail'),
  sugerenciaEmail: document.getElementById('sugerenciaEmail')

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

    if (id=='regPassword') {
      console.log('Aquí esta la password');      
      
    }

    if (id=='regTel') {
      console.log('Se valida el telefono');
    }

    if (id=='regCP') {
      console.log('Se valida el CP');
    }
  
  }