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
  if (images.length === 0) return;
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

//Carucel de botones de la seccion de comentarios
var slider = document.getElementById('review-slider');
var prev = document.getElementById('prev');
var next = document.getElementById('next');
var index = 0;
var totalGroups = 3; // Cambia esto según cuántos grupos de 4 tengas

next && next.addEventListener('click', function () {
  index = (index + 1) % totalGroups;
  slider.style.transform = "translateX(-".concat(index * 100, "%)");
});
prev && prev.addEventListener('click', function () {
  index = (index - 1 + totalGroups) % totalGroups;
  slider.style.transform = "translateX(-".concat(index * 100, "%)");
});

//carrusel de la seccion de imagenes en show.blade.php
document.addEventListener('DOMContentLoaded', function () {
  var imagenPrincipal = document.getElementById('productoImagenPrincipal');
  var miniaturas = document.querySelectorAll('.producto-show-miniatura');
  var botonAnterior = document.getElementById('productoImagenAnterior');
  var botonSiguiente = document.getElementById('productoImagenSiguiente');
  var botonCarrito = document.getElementById('addProductToCart');
  var botonesCantidad = document.querySelectorAll('.producto-show-opcion');
  var botonesVariante = document.querySelectorAll('.producto-show-variante');
  var indiceActual = 0;
  function mostrarImagen(indice) {
    if (!miniaturas.length) {
      return;
    }
    if (indice < 0) {
      indiceActual = miniaturas.length - 1;
    } else if (indice >= miniaturas.length) {
      indiceActual = 0;
    } else {
      indiceActual = indice;
    }
    imagenPrincipal.src = miniaturas[indiceActual].dataset.image;
    miniaturas.forEach(function (miniatura) {
      miniatura.classList.remove('producto-show-miniatura-activa');
    });
    miniaturas[indiceActual].classList.add('producto-show-miniatura-activa');
  }
  miniaturas.forEach(function (miniatura) {
    miniatura.addEventListener('click', function () {
      mostrarImagen(Number(this.dataset.index));
    });
  });
  botonAnterior.addEventListener('click', function () {
    mostrarImagen(indiceActual - 1);
  });
  botonSiguiente.addEventListener('click', function () {
    mostrarImagen(indiceActual + 1);
  });
  botonesCantidad.forEach(function (boton) {
    boton.addEventListener('click', function () {
      botonesCantidad.forEach(function (item) {
        item.classList.remove('producto-show-opcion-activa');
      });
      this.classList.add('producto-show-opcion-activa');
    });
  });
  botonesVariante.forEach(function (boton) {
    boton.addEventListener('click', function () {
      botonesVariante.forEach(function (item) {
        item.classList.remove('producto-show-variante-activa');
      });
      this.classList.add('producto-show-variante-activa');
    });
  });
  if (botonCarrito) {
    botonCarrito.addEventListener('click', function () {
      var cantidadActiva = document.querySelector('.producto-show-opcion-activa');
      var cantidad = cantidadActiva ? cantidadActiva.dataset.cantidad : '1';
      var product = {
        id: this.dataset.id,
        type: this.dataset.type,
        title: this.dataset.title,
        price: Number(this.dataset.price),
        image: imagenPrincipal.src,
        quantity: cantidad === '3' ? 3 : Number(cantidad)
      };
      var cart = JSON.parse(localStorage.getItem('productCart') || '[]');
      var existing = cart.find(function (item) {
        return item.id === product.id && item.type === product.type;
      });
      if (existing) {
        existing.quantity += product.quantity;
        existing.image = product.image;
      } else {
        cart.push(product);
      }
      localStorage.setItem('productCart', JSON.stringify(cart));
      this.textContent = 'Agregado al Carrito';
    });
  }
  mostrarImagen(0);
});
/******/ })()
;