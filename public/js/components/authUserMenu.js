/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************************!*\
  !*** ./resources/js/components/authUserMenu.js ***!
  \*************************************************/
// Activa el menú de usuario y permite cerrarlo con Escape o al hacer clic fuera.
var userMenu = document.getElementById('userMenu');
var optionUser = document.getElementById('optionUser');
if (userMenu && optionUser) {
  var closeMenu = function closeMenu() {
    optionUser.classList.add('hidden');
    userMenu.setAttribute('aria-expanded', 'false');
  };
  userMenu.addEventListener('click', function () {
    var isOpen = !optionUser.classList.contains('hidden');
    optionUser.classList.toggle('hidden', isOpen);
    userMenu.setAttribute('aria-expanded', String(!isOpen));
  });
  document.addEventListener('click', function (event) {
    if (!event.target.closest('.menu-usuario')) {
      closeMenu();
    }
  });
  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
      closeMenu();
      userMenu.focus();
    }
  });
}
/******/ })()
;