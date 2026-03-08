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
    const images = document.querySelectorAll('.soporte-carrusel-img');
    let current = 0;

    function showImage(idx) {
        images.forEach((img, i) => {
            img.style.opacity = i === idx ? '1' : '0';
            img.style.position = i === 0 ? 'relative' : 'absolute';
        });
    }
    showImage(current);

    document.getElementById('btn-next').onclick = () => {
        current = (current + 1) % images.length;
        showImage(current);
    };
    document.getElementById('btn-prev').onclick = () => {
        current = (current - 1 + images.length) % images.length;
        showImage(current);
    };
});

//Carucel de botones de la seccion de comentarios
   const slider = document.getElementById('review-slider');
const prev = document.getElementById('prev');
const next = document.getElementById('next');

let index = 0;
const totalGroups = 3; // Cambia esto según cuántos grupos de 4 tengas

next.addEventListener('click', () => {
    index = (index + 1) % totalGroups;
    slider.style.transform = `translateX(-${index * 100}%)`;
});

prev.addEventListener('click', () => {
    index = (index - 1 + totalGroups) % totalGroups;
    slider.style.transform = `translateX(-${index * 100}%)`;
});