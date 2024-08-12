
import { validarInputsDeNuevoRegistro } from "./validarInputs.js";

let buttonReg = document.getElementById('buttonRegistro');

let entradaFormReg = {
  nombre: document.getElementById('regNombre'),
  apellidos: document.getElementById('regApellidos'),
  email: document.getElementById('regEmail'),

}


entradaFormReg.nombre && entradaFormReg.nombre.addEventListener('input', function () {
  validarInputsDeNuevoRegistro(entradaFormReg.nombre.value, entradaFormReg.nombre.id);
})

//VALIDAR EL INPUT DE APELLIDOS.
entradaFormReg.apellidos && entradaFormReg.apellidos.addEventListener('input', function () {
  validarInputsDeNuevoRegistro(entradaFormReg.apellidos.value, entradaFormReg.apellidos.id);
})

entradaFormReg.email && entradaFormReg.email.addEventListener('input', function () {
  validarInputsDeNuevoRegistro(entradaFormReg.email.value, entradaFormReg.email.id);
})