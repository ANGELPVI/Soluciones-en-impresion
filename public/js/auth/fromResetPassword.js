/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************************!*\
  !*** ./resources/js/auth/fromResetPassword.js ***!
  \************************************************/
document.addEventListener('DOMContentLoaded', function () {
  var password = document.getElementById('password');
  var confirmPassword = document.getElementById('password-confirm');
  var matchCheck = document.getElementById('match-check');
  var bar1 = document.getElementById('bar-1');
  var bar2 = document.getElementById('bar-2');
  var bar3 = document.getElementById('bar-3');
  var strengthText = document.getElementById('strength-text');

  // 1. Lógica del Medidor de Fortaleza
  password.addEventListener('input', function () {
    var val = password.value;
    var score = 0;
    if (val.length >= 6) score++;
    if (val.match(/[A-Z]/) && val.match(/[0-9]/)) score++;
    if (val.match(/[^A-Za-z0-9]/)) score++;

    // Resetear clases
    [bar1, bar2, bar3].forEach(function (b) {
      return b.className = 'strength-bar';
    });
    strengthText.className = 'strength-text';
    if (val.length === 0) {
      strengthText.textContent = 'Seguridad de contraseña';
      return;
    }
    if (score === 1) {
      bar1.classList.add('bg-debil');
      strengthText.textContent = 'Débil';
      strengthText.classList.add('text-debil');
    } else if (score === 2) {
      bar1.classList.add('bg-media');
      bar2.classList.add('bg-media');
      strengthText.textContent = 'Media';
      strengthText.classList.add('text-media');
    } else if (score === 3) {
      bar1.classList.add('bg-fuerte');
      bar2.classList.add('bg-fuerte');
      bar3.classList.add('bg-fuerte');
      strengthText.textContent = 'Fuerte';
      strengthText.classList.add('text-fuerte');
    }
    checkMatch();
  });

  // 2. Lógica de Coincidencia de Contraseñas
  function checkMatch() {
    if (confirmPassword.value.length > 0 && password.value === confirmPassword.value) {
      matchCheck.classList.remove('hidden');
    } else {
      matchCheck.classList.add('hidden');
    }
  }
  confirmPassword.addEventListener('input', checkMatch);
});
/******/ })()
;