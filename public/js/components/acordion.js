/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
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
/*!*********************************************!*\
  !*** ./resources/js/components/acordion.js ***!
  \*********************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   faqAccordionInit: () => (/* binding */ faqAccordionInit)
/* harmony export */ });
function faqAccordionInit() {
  var buttons = document.querySelectorAll('.faq-question');
  buttons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var card = btn.parentElement;
      var arrow = btn.querySelector('.faq-arrow');
      if (!card.classList.contains('open')) {
        card.classList.add('open');
        arrow.innerHTML = '&#9650;';
      } else {
        card.classList.remove('open');
        arrow.innerHTML = '&#9660;';
      }
    });
  });
}

// Inicializar automáticamente si se importa como módulo
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', faqAccordionInit);
} else {
  faqAccordionInit();
}
/******/ })()
;