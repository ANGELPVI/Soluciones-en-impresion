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


//Carrucel de las impresoras que ofrecemos.
document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.carrusel-img');
    let current = 0;
    function showImage(idx) {
        images.forEach((img, i) => {
            img.style.opacity = i === idx ? '1' : '0';
        });
    }
    showImage(current);
    setInterval(() => {
        current = (current + 1) % images.length;
        showImage(current);
    }, 4000);
});

//Carucel de botones del tercer servicio tecnico
document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.divPrincipalCarrucelTercelServicio');
    if (!container) return;
    
    const images = document.querySelectorAll('.soporte-carrusel-img');
    if (images.length === 0) return;
    
    let current = 0;

    function showImage(idx) {
        images.forEach((img, i) => {
            img.style.opacity = i === idx ? '1' : '0';
        });
    }
    
    // Mostrar la primera imagen al cargar
    showImage(current);

    // Botón siguiente
    const btnNext = document.getElementById('btn-next');
    if (btnNext) {
        btnNext.addEventListener('click', () => {
            current = (current + 1) % images.length;
            showImage(current);
        });
    }
    
    // Botón anterior
    const btnPrev = document.getElementById('btn-prev');
    if (btnPrev) {
        btnPrev.addEventListener('click', () => {
            current = (current - 1 + images.length) % images.length;
            showImage(current);
        });
    }
});