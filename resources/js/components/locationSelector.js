// Selector reutilizable de estados y municipios para registro y perfil.
const select = document.getElementById('estados');
const selectMunicipios = document.getElementById('municipios');

if (select && selectMunicipios) {
  const estadoGuardado = select.dataset.selected || '';
  const municipioGuardado = selectMunicipios.dataset.selected || '';

  const crearOpcion = (valor, texto, seleccionada = false) => {
    const option = document.createElement('option');
    option.value = valor;
    option.textContent = texto;
    option.selected = seleccionada;
    return option;
  };

  const llenarMunicipios = (municipios, municipioSeleccionado = '') => {
    selectMunicipios.innerHTML = '';
    selectMunicipios.appendChild(crearOpcion('', 'Seleccione un municipio'));

    municipios.forEach((municipio) => {
      selectMunicipios.appendChild(crearOpcion(municipio, municipio, municipio === municipioSeleccionado));
    });
  };

  const selectorScript = Array.from(document.scripts)
    .find((script) => script.src.includes('locationSelector.js'));
  const catalogoUrl = selectorScript
    ? new URL('../estados-municipios.json', selectorScript.src)
    : '/js/estados-municipios.json';

  fetch(catalogoUrl)
    .then((respuesta) => {
      if (!respuesta.ok) throw new Error('No se pudo cargar el catálogo de ubicaciones.');
      return respuesta.json();
    })
    .then((ubicaciones) => {
      select.innerHTML = '';
      select.appendChild(crearOpcion('', 'Selecciona un estado'));

      Object.keys(ubicaciones).forEach((estado) => {
        select.appendChild(crearOpcion(estado, estado, estado === estadoGuardado));
      });

      llenarMunicipios(estadoGuardado && ubicaciones[estadoGuardado]
        ? ubicaciones[estadoGuardado]
        : [], municipioGuardado);

      select.addEventListener('change', () => {
        llenarMunicipios(ubicaciones[select.value] || []);
      });
    })
    .catch(() => {
      selectMunicipios.innerHTML = '';
      selectMunicipios.appendChild(crearOpcion('', 'No fue posible cargar municipios'));
    });
}

// Botón responsivo que muestra y oculta el menú.
const boton = document.querySelector('#navegation');
const menu = document.querySelector('#menu');

if (boton && menu) {
  boton.addEventListener('click', () => menu.classList.toggle('hidden'));
}
