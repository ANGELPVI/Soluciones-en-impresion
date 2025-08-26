/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

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
/*!*********************************************!*\
  !*** ./resources/js/auth/loginValidator.js ***!
  \*********************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _utils_validationPatterns_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../utils/validationPatterns.js */ "./resources/js/utils/validationPatterns.js");

var login = document.getElementsByName('login')[0];
var textoError = document.getElementById('error');
var textErrorUsuario = document.getElementById('usuarioError');
var botonLogin = document.getElementById('bottonLogion');

//El && evalua que el objeto login no este vacio o sea null
//Así evitamos que el codigo se detenga y no se ejecuten las otras funciones.
login && login.addEventListener('input', function () {
  if (_utils_validationPatterns_js__WEBPACK_IMPORTED_MODULE_0__.expreciones.email.test(login.email.value) != true || login.password.value == '') {
    botonLogin.setAttribute('disabled', 'disabled');
    botonLogin.classList.remove('buttonLoginEnable');
    botonLogin.classList.add('buttonLogin');
  } else {
    botonLogin.removeAttribute('disabled');
    botonLogin.classList.remove('buttonLogin');
    botonLogin.classList.add('buttonLoginEnable');
  }
});

//Quitar error de usuario o contraseña
// 1- Hacer que se quite el error que la variable textErrorUsurio proboca por iniciar vacia.
login && login.email.addEventListener('click', function () {
  textoError.classList.add('hidden');
  textErrorUsuario && textErrorUsuario.classList.add('hidden');
});
})();

/******/ })()
;