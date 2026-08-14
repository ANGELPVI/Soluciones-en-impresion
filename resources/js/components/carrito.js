document.addEventListener("DOMContentLoaded", function () {
    var imagenPrincipal = document.getElementById("productoImagenPrincipal");
    var miniaturas = document.querySelectorAll(".producto-show-miniatura");
    var botonAnterior = document.getElementById("productoImagenAnterior");
    var botonSiguiente = document.getElementById("productoImagenSiguiente");
    var inputCantidad = document.getElementById("productoCantidadSeleccionada");
    var botonesCantidad = document.querySelectorAll(".producto-show-opcion");
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
            miniatura.classList.remove("producto-show-miniatura-activa");
        });

        miniaturas[indiceActual].classList.add(
            "producto-show-miniatura-activa",
        );
    }

    miniaturas.forEach(function (miniatura) {
        miniatura.addEventListener("click", function () {
            mostrarImagen(Number(this.dataset.index));
        });
    });

    if (botonAnterior) {
        botonAnterior.addEventListener("click", function () {
            mostrarImagen(indiceActual - 1);
        });
    }

    if (botonSiguiente) {
        botonSiguiente.addEventListener("click", function () {
            mostrarImagen(indiceActual + 1);
        });
    }

    botonesCantidad.forEach(function (boton) {
        boton.addEventListener("click", function () {
            botonesCantidad.forEach(function (item) {
                item.classList.remove("producto-show-opcion-activa");
            });
            this.classList.add("producto-show-opcion-activa");
            if (inputCantidad) {
                inputCantidad.value = this.dataset.cantidad;
            }
        });
    });

    mostrarImagen(0);
});
