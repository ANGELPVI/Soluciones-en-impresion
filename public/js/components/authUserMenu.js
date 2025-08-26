/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************************!*\
  !*** ./resources/js/components/authUserMenu.js ***!
  \*************************************************/
// Activar el menu de usuario
var userMenu = document.getElementById('userMenu');
var optionUser = document.getElementById('optionUser');
userMenu && userMenu.addEventListener('click', function () {
  optionUser.classList.toggle('hidden');
});
/******/ })()
;