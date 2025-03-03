
import { validarInputsDeNuevoRegistro } from "./validarInputs.js";

let buttonReg = document.getElementById('buttonRegistro');

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



entradaFormReg.nombre && entradaFormReg.nombre.addEventListener('input', function () {
  validarInputsDeNuevoRegistro(entradaFormReg.nombre.value, entradaFormReg.nombre.id);
});

entradaFormReg.apellidos && entradaFormReg.apellidos.addEventListener('input', function () {
  validarInputsDeNuevoRegistro(entradaFormReg.apellidos.value, entradaFormReg.apellidos.id);
});

entradaFormReg.email && entradaFormReg.email.addEventListener('input', function () {
  validarInputsDeNuevoRegistro(entradaFormReg.email.value, entradaFormReg.email.id);
});

entradaFormReg.password && entradaFormReg.password.addEventListener('input', function () {
  validarInputsDeNuevoRegistro(entradaFormReg.password.value, entradaFormReg.password.id);
});

entradaFormReg.tel && entradaFormReg.tel.addEventListener('input', function () {
  validarInputsDeNuevoRegistro(entradaFormReg.tel.value, entradaFormReg.tel.id);
});

entradaFormReg.estados && entradaFormReg.estados.addEventListener('change',function(){
  validarInputsDeNuevoRegistro(entradaFormReg.estados.value,entradaFormReg.estados.id);
})

entradaFormReg.municipios && entradaFormReg.municipios.addEventListener('change',function(){
  validarInputsDeNuevoRegistro(entradaFormReg.municipios.value, entradaFormReg.municipios.id);
})

entradaFormReg.CP && entradaFormReg.CP.addEventListener('input', function () {
  validarInputsDeNuevoRegistro(entradaFormReg.CP.value, entradaFormReg.CP.id);
});

entradaFormReg.colonia && entradaFormReg.colonia.addEventListener('input', function () {
  validarInputsDeNuevoRegistro(entradaFormReg.colonia.value, entradaFormReg.colonia.id);
});

entradaFormReg.calle && entradaFormReg.calle.addEventListener('input', function () {
  validarInputsDeNuevoRegistro(entradaFormReg.calle.value, entradaFormReg.calle.id);
});