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

    var formularioCarrito = document.querySelector(".producto-show-form-carrito");
    var contadorCarrito = document.getElementById("cartItemCount");
    var mensajeCarrito = document.getElementById("cartFeedback");
    var temporizadorMensajeCarrito;

    document.querySelectorAll("[data-auto-hide-alert]").forEach(function (alerta) {
        window.setTimeout(function () {
            alerta.classList.add("hidden");
        }, 3000);
    });

    function mostrarMensajeCarrito(mensaje, esError) {
        if (!mensajeCarrito) {
            return;
        }

        mensajeCarrito.textContent = mensaje;
        mensajeCarrito.classList.remove("hidden", "bg-green-500", "bg-red-500", "text-white");
        mensajeCarrito.classList.add(esError ? "bg-red-500" : "bg-green-500", "text-white");

        window.clearTimeout(temporizadorMensajeCarrito);
        temporizadorMensajeCarrito = window.setTimeout(function () {
            mensajeCarrito.classList.add("hidden");
        }, 3000);
    }

    function actualizarContadorCarrito(cantidad) {
        if (!contadorCarrito) {
            return;
        }

        contadorCarrito.textContent = cantidad;
        contadorCarrito.setAttribute("aria-label", cantidad + " productos en el carrito");
        contadorCarrito.classList.remove("hidden");
        contadorCarrito.classList.add("inline-flex");
    }

    if (formularioCarrito) {
        formularioCarrito.addEventListener("submit", function (event) {
            event.preventDefault();

            var boton = formularioCarrito.querySelector("button[type='submit']");
            var textoOriginal = boton.textContent;
            var csrfToken = document.querySelector("meta[name='csrf-token']").getAttribute("content");

            boton.disabled = true;
            boton.textContent = "Agregando...";

            fetch(formularioCarrito.action, {
                method: "POST",
                credentials: "same-origin",
                headers: {
                    Accept: "application/json",
                    "X-CSRF-TOKEN": csrfToken,
                },
                body: new FormData(formularioCarrito),
            })
                .then(function (respuesta) {
                    return respuesta.json().then(function (datos) {
                        if (!respuesta.ok) {
                            throw new Error(datos.message || "No fue posible agregar el producto al carrito.");
                        }

                        return datos;
                    });
                })
                .then(function (datos) {
                    actualizarContadorCarrito(datos.cartItemCount);
                    mostrarMensajeCarrito(datos.message, false);
                })
                .catch(function (error) {
                    mostrarMensajeCarrito(error.message, true);
                })
                .finally(function () {
                    boton.disabled = false;
                    boton.textContent = textoOriginal;
                });
        });
    }
});
