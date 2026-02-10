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

//Carrucel de las impresoras que ofrecemos.
document.addEventListener('DOMContentLoaded', function () {
  var images = document.querySelectorAll('.carrusel-img');
  var current = 0;
  function showImage(idx) {
    images.forEach(function (img, i) {
      img.style.opacity = i === idx ? '1' : '0';
    });
  }
  showImage(current);
  setInterval(function () {
    current = (current + 1) % images.length;
    showImage(current);
  }, 4000);
});

//Carucel de botones del tercer servicio tecnico
document.addEventListener('DOMContentLoaded', function () {
  var images = document.querySelectorAll('.soporte-carrusel-img');
  var current = 0;
  function showImage(idx) {
    images.forEach(function (img, i) {
      img.style.opacity = i === idx ? '1' : '0';
      img.style.position = i === 0 ? 'relative' : 'absolute';
    });
  }
  showImage(current);
  document.getElementById('btn-next').onclick = function () {
    current = (current + 1) % images.length;
    showImage(current);
  };
  document.getElementById('btn-prev').onclick = function () {
    current = (current - 1 + images.length) % images.length;
    showImage(current);
  };
});
/******/ })()
;