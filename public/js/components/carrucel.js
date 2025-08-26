/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************************!*\
  !*** ./resources/js/components/carrucel.js ***!
  \*********************************************/
document.addEventListener('DOMContentLoaded', function () {
  var carrusel = document.querySelector('.div-empresas');
  if (!carrusel) return;

  // Clona los logos para efecto infinito
  var logos = Array.from(carrusel.querySelector('.div-secundario').children);
  logos.forEach(function (logo) {
    var clone = logo.cloneNode(true);
    clone.setAttribute('aria-hidden', 'true');
    carrusel.querySelector('.div-secundario').appendChild(clone);
  });
  var scrollStep = 1;
  var interval = null;
  function startCarrusel() {
    interval = setInterval(function () {
      carrusel.scrollLeft += scrollStep;

      // Cuando llega al final, regresa al inicio suavemente
      if (carrusel.scrollLeft >= carrusel.scrollWidth / 2) {
        carrusel.scrollLeft = 0;
      }
    }, 16); // ~60fps
  }
  startCarrusel();
});
/******/ })()
;