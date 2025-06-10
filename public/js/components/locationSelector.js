/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************************!*\
  !*** ./resources/js/components/locationSelector.js ***!
  \*****************************************************/
function _slicedToArray(r, e) { return _arrayWithHoles(r) || _iterableToArrayLimit(r, e) || _unsupportedIterableToArray(r, e) || _nonIterableRest(); }
function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(r, a) { if (r) { if ("string" == typeof r) return _arrayLikeToArray(r, a); var t = {}.toString.call(r).slice(8, -1); return "Object" === t && r.constructor && (t = r.constructor.name), "Map" === t || "Set" === t ? Array.from(r) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? _arrayLikeToArray(r, a) : void 0; } }
function _arrayLikeToArray(r, a) { (null == a || a > r.length) && (a = r.length); for (var e = 0, n = Array(a); e < a; e++) n[e] = r[e]; return n; }
function _iterableToArrayLimit(r, l) { var t = null == r ? null : "undefined" != typeof Symbol && r[Symbol.iterator] || r["@@iterator"]; if (null != t) { var e, n, i, u, a = [], f = !0, o = !1; try { if (i = (t = t.call(r)).next, 0 === l) { if (Object(t) !== t) return; f = !1; } else for (; !(f = (e = i.call(t)).done) && (a.push(e.value), a.length !== l); f = !0); } catch (r) { o = !0, n = r; } finally { try { if (!f && null != t["return"] && (u = t["return"](), Object(u) !== u)) return; } finally { if (o) throw n; } } return a; } }
function _arrayWithHoles(r) { if (Array.isArray(r)) return r; }
//Funcion que rellena el select del los estados
var select = document.getElementById('estados');
var SelectMunicipios = document.getElementById('municipios');
var municipios = [];
function estados() {
  fetch('js/estados-municipios.json').then(function (respuesta) {
    return respuesta.json();
  }).then(function (respuesta) {
    municipios = respuesta;
    Object.entries(respuesta).forEach(function (_ref) {
      var _ref2 = _slicedToArray(_ref, 1),
        key = _ref2[0];
      var option = document.createElement("option");
      option.value = "".concat(key);
      option.text = "".concat(key);
      select && select.appendChild(option);
    });
  });
}
estados();
// Funcion que busca los municipios al seleccionar un estado
select && select.addEventListener('change', function () {
  SelectMunicipios.innerHTML = "<option>Seleccione un municipio</option>";
  municipios[select.value].forEach(function (municipio) {
    SelectMunicipios.innerHTML += "<option value=\"".concat(municipio, "\">").concat(municipio, "</option>");
  });
});

/**Bon resposivo que muestra y oculta el menu*/
var boton = document.querySelector('#navegation');
var menu = document.querySelector('#menu');
boton.addEventListener('click', function () {
  menu.classList.toggle('hidden');
});
/******/ })()
;