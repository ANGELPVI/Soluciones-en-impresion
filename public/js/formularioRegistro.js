
import { validarInputsDeNuevoRegistro } from "./validarInputs.js";

let entradaFormReg = {
  nombre: document.getElementById('regNombre'),
  apellidos: document.getElementById('regApellidos'),
  email: document.getElementById('regEmail'),
  password: document.getElementById('regPassword'),
  tel: document.getElementById('regTel'),
  CP: document.getElementById('regCP'),
  colonia: document.getElementById('regColonia'),
  calle: document.getElementById('regCalle'),
  estados: document.getElementById('estados'),
  municipios: document.getElementById('municipios')
}


export function agregarListenersGenerales(campos, validarFn) {
  for (const key in campos) {
    const input = campos[key];

    if (input) {
      input.addEventListener('input', () => {
        validarFn(input.value, input.id);
      });
    }
  }
}

 /*Ver donde poner esta funcion si hacer un archivo 
 nuevo y desde este archivo llamarlo.
 Hacer los test de la funcion agrgarListenerGenerales*/

agregarListenersGenerales(entradaFormReg,validarInputsDeNuevoRegistro);

export function suma(a,b){
  return a+b;
  
}