/*organizar los archivos para que el codigo sea mas lejible*/
import { expreciones } from "./validaciones.js";
export function validarInputsDeNuevoRegistro(valor, id) {
    //Validar existencia, tipo de dato, longitud y duplicación.
    console.log(valor);
    if (id == 'regNombre') {
      if (valor == '' || valor.length > 26 || expreciones.soloString.test(valor) != true) {
        console.log('se bloquea');
        mensajesYSugerencias.mensajeErrorNombre.classList.remove('hidden');
        mensajesYSugerencias.sugerenciaNombre.classList.remove('hidden');
  
  
      } else {
        console.log('se desbloquea');
        mensajesYSugerencias.mensajeErrorNombre.classList.add('hidden');
        mensajesYSugerencias.sugerenciaNombre.classList.add('hidden');
  
      }
    }
  
    if (id == 'regApellidos') {
      console.log('yo me ejecuto');
      if (valor == '' || valor.length >= 35 || expreciones.soloString.test(valor) != true) {
        console.log('se bloquea');
        mensajesYSugerencias.mensajeErrorApellidos.classList.remove('hidden');
        mensajesYSugerencias.sugerenciaApellidos.classList.remove('hidden');
  
      } else {
        console.log('se desbloquea');
        mensajesYSugerencias.mensajeErrorApellidos.classList.add('hidden');
        mensajesYSugerencias.sugerenciaApellidos.classList.add('hidden');
  
      }
    }
  
  
    if (id=='regEmail'){
      if (valor.length == '' || valor.length > 40 || expreciones.email.test(valor) != true) {
        console.log('Email no valido');
      } else {
        console.log('Email valido');
      }
      
    }
  
  }