document.addEventListener('DOMContentLoaded', () => {
    const carrusel = document.querySelector('.div-empresas');
    if (!carrusel) return;

    // Clona los logos para efecto infinito
    const logos = Array.from(carrusel.querySelector('.div-secundario').children);
    logos.forEach(logo => {
        const clone = logo.cloneNode(true);
        clone.setAttribute('aria-hidden', 'true');
        carrusel.querySelector('.div-secundario').appendChild(clone);
    });

    let scrollStep = 1;
    let interval = null;

    function startCarrusel() {
        interval = setInterval(() => {
            carrusel.scrollLeft += scrollStep;

            // Cuando llega al final, regresa al inicio suavemente
            if (carrusel.scrollLeft >= carrusel.scrollWidth / 2) {
                carrusel.scrollLeft = 0;
            }
        }, 16); // ~60fps
    }

    startCarrusel();

});