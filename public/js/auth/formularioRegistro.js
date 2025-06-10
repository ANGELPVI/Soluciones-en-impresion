/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/auth/validarInputs.js":
/*!********************************************!*\
  !*** ./resources/js/auth/validarInputs.js ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   validarInputsDeNuevoRegistro: () => (/* binding */ validarInputsDeNuevoRegistro)
/* harmony export */ });
/* harmony import */ var _utils_validationPatterns_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../utils/validationPatterns.js */ "./resources/js/utils/validationPatterns.js");

var mensajesYSugerencias = {
  mensajeErrorNombre: document.getElementById('mensajeNombre'),
  sugerenciaNombre: document.getElementById('sugerenciaNombre'),
  mensajeErrorApellidos: document.getElementById('mensajeApellidos'),
  sugerenciaApellidos: document.getElementById('sugerenciaApellidos'),
  mensajeErrorEmail: document.getElementById('mensajeEmail'),
  sugerenciaEmail: document.getElementById('sugerenciaEmail'),
  mensajeEmailExistente: document.getElementById('mensajeEmailExistente'),
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
};
var inputsValidados = [false, false, false, false, false, false, false, false, false, false];
function validarInputsDeNuevoRegistro(valor, id) {
  if (id == 'regNombre') {
    if (valor == '' || valor.length > 26 || _utils_validationPatterns_js__WEBPACK_IMPORTED_MODULE_0__.expreciones.soloString.test(valor) != true) {
      mensajesYSugerencias.mensajeErrorNombre.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaNombre.classList.remove('hidden');
      activarBotonReguistro(0, false);
    } else {
      mensajesYSugerencias.mensajeErrorNombre.classList.add('hidden');
      mensajesYSugerencias.sugerenciaNombre.classList.add('hidden');
      activarBotonReguistro(0, true);
    }
  }
  if (id == 'regApellidos') {
    if (valor == '' || valor.length >= 35 || _utils_validationPatterns_js__WEBPACK_IMPORTED_MODULE_0__.expreciones.soloString.test(valor) != true) {
      console.log('se bloquea');
      mensajesYSugerencias.mensajeErrorApellidos.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaApellidos.classList.remove('hidden');
      activarBotonReguistro(1, false);
    } else {
      mensajesYSugerencias.mensajeErrorApellidos.classList.add('hidden');
      mensajesYSugerencias.sugerenciaApellidos.classList.add('hidden');
      activarBotonReguistro(1, true);
    }
  }
  if (id == 'regEmail') {
    if (valor.length == '' || valor.length > 40 || _utils_validationPatterns_js__WEBPACK_IMPORTED_MODULE_0__.expreciones.email.test(valor) != true) {
      mensajesYSugerencias.mensajeErrorEmail.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaEmail.classList.remove('hidden');
      activarBotonReguistro(2, false);
    } else {
      mensajesYSugerencias.mensajeErrorEmail.classList.add('hidden');
      mensajesYSugerencias.sugerenciaEmail.classList.add('hidden');

      //Validar que el email no se repita con otro email.
      fetch('/revisarEmail', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
          email: valor
        })
      }).then(function (resp) {
        return resp.json();
      }).then(function (data) {
        if (data.datos) {
          mensajesYSugerencias.mensajeEmailExistente.classList.remove('hidden');
          activarBotonReguistro(2, false);
        } else {
          mensajesYSugerencias.mensajeEmailExistente.classList.add('hidden');
          activarBotonReguistro(2, true);
        }
      })["catch"](function (error) {
        return console.error('Error:', error);
      });
    }
  }
  if (id == 'regPassword') {
    if (_utils_validationPatterns_js__WEBPACK_IMPORTED_MODULE_0__.expreciones.password.test(valor) != true) {
      mensajesYSugerencias.mensajeErrorPasword.classList.remove('hidden');
      activarBotonReguistro(3, false);
    } else {
      mensajesYSugerencias.mensajeErrorPasword.classList.add('hidden');
      activarBotonReguistro(3, true);
    }
  }
  if (id == 'regTel') {
    if (_utils_validationPatterns_js__WEBPACK_IMPORTED_MODULE_0__.expreciones.telefono.test(valor) != true) {
      mensajesYSugerencias.mensajeErrorTel.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaTel.classList.remove('hidden');
      activarBotonReguistro(4, false);
    } else {
      mensajesYSugerencias.mensajeErrorTel.classList.add('hidden');
      mensajesYSugerencias.sugerenciaTel.classList.add('hidden');
      fetch('/duplicacionDeTel', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
          telefono: valor
        })
      }).then(function (resp) {
        return resp.json();
      }).then(function (data) {
        if (data.datos) {
          mensajesYSugerencias.mensajeTelExistente.classList.remove('hidden');
          activarBotonReguistro(4, false);
        } else {
          mensajesYSugerencias.mensajeTelExistente.classList.add('hidden');
          activarBotonReguistro(4, true);
        }
      })["catch"](function (error) {
        return console.error('Error:', error);
      });
    }
  }
  if (id == 'estados') {
    if (valor == 'Selecciona un Estado') {
      mensajesYSugerencias.mensajeEstado.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaEstado.classList.remove('hidden');
      activarBotonReguistro(5, false);
    } else {
      mensajesYSugerencias.mensajeEstado.classList.add('hidden');
      mensajesYSugerencias.sugerenciaEstado.classList.add('hidden');
      activarBotonReguistro(5, true);
    }
  }
  if (id == 'municipios') {
    if (valor == 'Seleccione un municipio') {
      mensajesYSugerencias.mensajeMunicipio.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaMunicipio.classList.remove('hidden');
      activarBotonReguistro(6, false);
    } else {
      mensajesYSugerencias.mensajeMunicipio.classList.add('hidden');
      mensajesYSugerencias.sugerenciaMunicipio.classList.add('hidden');
      activarBotonReguistro(6, true);
    }
  }
  if (id == 'regCP') {
    if (_utils_validationPatterns_js__WEBPACK_IMPORTED_MODULE_0__.expreciones.CP.test(valor) != true) {
      mensajesYSugerencias.mensajeErrorCP.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaCP.classList.remove('hidden');
      activarBotonReguistro(7, false);
    } else {
      mensajesYSugerencias.mensajeErrorCP.classList.add('hidden');
      mensajesYSugerencias.sugerenciaCP.classList.add('hidden');
      activarBotonReguistro(7, true);
    }
  }
  if (id == 'regColonia') {
    if (_utils_validationPatterns_js__WEBPACK_IMPORTED_MODULE_0__.expreciones.colonia.test(valor) != true) {
      mensajesYSugerencias.mensajeErrorColonia.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaColonia.classList.remove('hidden');
      activarBotonReguistro(8, false);
    } else {
      mensajesYSugerencias.mensajeErrorColonia.classList.add('hidden');
      mensajesYSugerencias.sugerenciaColonia.classList.add('hidden');
      activarBotonReguistro(8, true);
    }
  }
  if (id == 'regCalle') {
    if (_utils_validationPatterns_js__WEBPACK_IMPORTED_MODULE_0__.expreciones.calle.test(valor) != true) {
      mensajesYSugerencias.mensajeErrorCalle.classList.remove('hidden');
      mensajesYSugerencias.sugerenciaCalle.classList.remove('hidden');
      activarBotonReguistro(9, false);
    } else {
      mensajesYSugerencias.mensajeErrorCalle.classList.add('hidden');
      mensajesYSugerencias.sugerenciaCalle.classList.add('hidden');
      activarBotonReguistro(9, true);
    }
  }
}

//Activar el boton de registrar nuevo usurio
//Probar que el boton si envie los datos para el nuevo registro.
// Que en el Backend este validado que no se repita email y tel si se saltan la validación de Fronend. 
function activarBotonReguistro(index, estado) {
  var botonRegistro = document.getElementById('buttonRegistro');
  inputsValidados[index] = estado;
  var todosValidos = inputsValidados.every(function (valor) {
    return valor === true;
  });
  if (todosValidos) {
    console.log('activado');
    botonRegistro.classList.remove("buttonRegistro");
    botonRegistro.classList.add('buttonRegistroEnable');
  } else {
    console.log('Desabilhitado');
    botonRegistro.classList.remove('buttonRegistroEnable');
    botonRegistro.classList.add('buttonRegistro');
  }
}

/***/ }),

/***/ "./resources/js/utils/validationPatterns.js":
/*!**************************************************!*\
  !*** ./resources/js/utils/validationPatterns.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   expreciones: () => (/* binding */ expreciones)
/* harmony export */ });
var expreciones = {
  email: /^[a-zA-Z0-9_.ñÑ+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  soloString: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/,
  password: /^[A-Za-z0-9!@#$%^&*()_+-{}\[\]:;<>,.?~\\/=|]{8,}$/,
  telefono: /^\d{10}$/,
  CP: /^\d{5}$/,
  colonia: /^[A-Za-z0-9ÁÉÍÓÚáéíóúÑñ.,'°#\-\s]+$/,
  calle: /^[A-Za-zÁÉÍÓÚáéíóúÑñ0-9.,'°#\-\s]+$/
};

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!*************************************************!*\
  !*** ./resources/js/auth/formularioRegistro.js ***!
  \*************************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   agregarListenersGenerales: () => (/* binding */ agregarListenersGenerales)
/* harmony export */ });
/* harmony import */ var _validarInputs_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./validarInputs.js */ "./resources/js/auth/validarInputs.js");

var entradaFormReg = {
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
};
function agregarListenersGenerales(campos, validarFn) {
  var _loop = function _loop() {
    var input = campos[key];
    if (input) {
      input.addEventListener('input', function () {
        validarFn(input.value, input.id);
      });
    }
  };
  for (var key in campos) {
    _loop();
  }
}

/*Ver donde poner esta funcion si hacer un archivo 
nuevo y desde este archivo llamarlo.
Hacer los test de la funcion agrgarListenerGenerales*/

agregarListenersGenerales(entradaFormReg, _validarInputs_js__WEBPACK_IMPORTED_MODULE_0__.validarInputsDeNuevoRegistro);
})();

/******/ })()
;