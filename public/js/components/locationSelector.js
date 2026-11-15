/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************************!*\
  !*** ./resources/js/components/locationSelector.js ***!
  \*****************************************************/
// Selector reutilizable de estados y municipios para registro y perfil.
var select = document.getElementById('estados');
var selectMunicipios = document.getElementById('municipios');
if (select && selectMunicipios) {
  var estadoGuardado = select.dataset.selected || '';
  var municipioGuardado = selectMunicipios.dataset.selected || '';
  var crearOpcion = function crearOpcion(valor, texto) {
    var seleccionada = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;
    var option = document.createElement('option');
    option.value = valor;
    option.textContent = texto;
    option.selected = seleccionada;
    return option;
  };
  var llenarMunicipios = function llenarMunicipios(municipios) {
    var municipioSeleccionado = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : '';
    selectMunicipios.innerHTML = '';
    selectMunicipios.appendChild(crearOpcion('', 'Seleccione un municipio'));
    municipios.forEach(function (municipio) {
      selectMunicipios.appendChild(crearOpcion(municipio, municipio, municipio === municipioSeleccionado));
    });
  };
  var selectorScript = Array.from(document.scripts).find(function (script) {
    return script.src.includes('locationSelector.js');
  });
  var catalogoUrl = selectorScript ? new URL('../estados-municipios.json', selectorScript.src) : '/js/estados-municipios.json';
  fetch(catalogoUrl).then(function (respuesta) {
    if (!respuesta.ok) throw new Error('No se pudo cargar el catálogo de ubicaciones.');
    return respuesta.json();
  }).then(function (ubicaciones) {
    select.innerHTML = '';
    select.appendChild(crearOpcion('', 'Selecciona un estado'));
    Object.keys(ubicaciones).forEach(function (estado) {
      select.appendChild(crearOpcion(estado, estado, estado === estadoGuardado));
    });
    llenarMunicipios(estadoGuardado && ubicaciones[estadoGuardado] ? ubicaciones[estadoGuardado] : [], municipioGuardado);
    select.addEventListener('change', function () {
      llenarMunicipios(ubicaciones[select.value] || []);
    });
  })["catch"](function () {
    selectMunicipios.innerHTML = '';
    selectMunicipios.appendChild(crearOpcion('', 'No fue posible cargar municipios'));
  });
}

// Botón responsivo que muestra y oculta el menú.
var boton = document.querySelector('#navegation');
var menu = document.querySelector('#menu');
if (boton && menu) {
  boton.addEventListener('click', function () {
    return menu.classList.toggle('hidden');
  });
}
/******/ })()
;