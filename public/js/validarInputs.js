import { expreciones } from "./regExpresion.js";

let mensajesYSugerencias = {
  mensajeErrorNombre: document.getElementById('mensajeNombre'),
  sugerenciaNombre: document.getElementById('sugerenciaNombre'),
  mensajeErrorApellidos: document.getElementById('mensajeApellidos'),
  sugerenciaApellidos: document.getElementById('sugerenciaApellidos'),
  mensajeErrorEmail: document.getElementById('mensajeEmail'),
  sugerenciaEmail: document.getElementById('sugerenciaEmail'),
  mensajeEmailExistente:document.getElementById('mensajeEmailExistente'),
  mensajeErrorPasword: document.getElementById('mensajePass'),
  mensajeErrorTel: document.getElementById('mensajeTel'),
  sugerenciaTel: document.getElementById('sugerenciaTel'),
  mensajeTelExistente: document.getElementById('mensajeTelExistente'),
  mensajeEstado: document.getElementById('mensajeEstado'),
  sugerenciaEstado: document.getElementById('sugerenciaEstado'),
  mensajeMunicipio: document.getElementById('mensajeMunicipio'),
  sugerenciaMunicipio: document.getElementById('sugerenciaMunicipio'),
  mensajeErrorCP: document.getElementById('mensajeCP'),
  sugerenciaCP: document.getElementById('sugerenciaCP'),
  mensajeErrorColonia: document.getElementById('mensajeColonia'),
  sugerenciaColonia: document.getElementById('sugerenciaColonia'),
  mensajeErrorCalle: document.getElementById('mensajeCalle'),
  sugerenciaCalle: document.getElementById('sugerenciaCalle')



}


export function validarInputsDeNuevoRegistro(valor, id) {

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


  if (id == 'regEmail') {
    if (valor.length == '' || valor.length > 40 || expreciones.email.test(valor) != true) {
      mensajesYSugerencias.mensajeErrorEmail.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaEmail.classList.remove('hidden');
    } else {
      mensajesYSugerencias.mensajeErrorEmail.classList.add('hidden');
      mensajesYSugerencias.sugerenciaEmail.classList.add('hidden');
    }

    //Validar que el email no se repita con otro email.
    fetch('/revisarEmail', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      },
      body: JSON.stringify({ email:valor})
    })
    .then(resp=>resp.json())
    .then(data => {
      if (data.datos) {
          mensajesYSugerencias.mensajeEmailExistente.classList.remove('hidden');
      } else {
        mensajesYSugerencias.mensajeEmailExistente.classList.add('hidden');
      }
  })
  .catch(error => console.error('Error:', error));


  }

  if (id == 'regPassword') {
    if (expreciones.password.test(valor) != true) {
      mensajesYSugerencias.mensajeErrorPasword.classList.remove('hidden');

    } else {
      mensajesYSugerencias.mensajeErrorPasword.classList.add('hidden')

    }

    

  }

  if (id == 'regTel') {

    if (expreciones.telefono.test(valor) != true) {
      mensajesYSugerencias.mensajeErrorTel.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaTel.classList.remove('hidden');

    } else {
      mensajesYSugerencias.mensajeErrorTel.classList.add('hidden');
      mensajesYSugerencias.sugerenciaTel.classList.add('hidden');


    }

    fetch('/duplicacionDeTel', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      },
      body: JSON.stringify({ telefono:valor})
    })
    .then(resp=>resp.json())
    .then(data => {
           
      if (data.datos) {  
          mensajesYSugerencias.mensajeTelExistente.classList.remove('hidden');
      } else {
          mensajesYSugerencias.mensajeTelExistente.classList.add('hidden');
      }
  })
  .catch(error => console.error('Error:', error));






  }

  if (id == 'estados') {
    if (valor == 'Selecciona un Estado') {
      mensajesYSugerencias.mensajeEstado.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaEstado.classList.remove('hidden');

    } else {
      mensajesYSugerencias.mensajeEstado.classList.add('hidden');
      mensajesYSugerencias.sugerenciaEstado.classList.add('hidden');
    }

  }

  if (id == 'municipios') {
    if (valor == 'Seleccione un municipio') {
      mensajesYSugerencias.mensajeMunicipio.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaMunicipio.classList.remove('hidden');

    } else {
      mensajesYSugerencias.mensajeMunicipio.classList.add('hidden');
      mensajesYSugerencias.sugerenciaMunicipio.classList.add('hidden');


    }

  }

  if (id == 'regCP') {

    if (expreciones.CP.test(valor) != true) {
      mensajesYSugerencias.mensajeErrorCP.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaCP.classList.remove('hidden');

    } else {
      mensajesYSugerencias.mensajeErrorCP.classList.add('hidden');
      mensajesYSugerencias.sugerenciaCP.classList.add('hidden');


    }

  }

  if (id == 'regColonia') {
    if (expreciones.colonia.test(valor) != true) {
      mensajesYSugerencias.mensajeErrorColonia.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaColonia.classList.remove('hidden');

    } else {
      mensajesYSugerencias.mensajeErrorColonia.classList.add('hidden');
      mensajesYSugerencias.sugerenciaColonia.classList.add('hidden');


    }

  }

  if (id == 'regCalle') {
    if (expreciones.calle.test(valor) != true) {
      mensajesYSugerencias.mensajeErrorCalle.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaCalle.classList.remove('hidden');
    } else {
      mensajesYSugerencias.mensajeErrorCalle.classList.add('hidden');
      mensajesYSugerencias.sugerenciaCalle.classList.add('hidden');

    }


  }

}