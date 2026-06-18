document.addEventListener('DOMContentLoaded', function () {
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('password-confirm');
    const matchCheck = document.getElementById('match-check');
    
    const bar1 = document.getElementById('bar-1');
    const bar2 = document.getElementById('bar-2');
    const bar3 = document.getElementById('bar-3');
    const strengthText = document.getElementById('strength-text');

    // 1. Lógica del Medidor de Fortaleza
    password.addEventListener('input', function () {
        const val = password.value;
        let score = 0;

        if (val.length >= 6) score++;
        if (val.match(/[A-Z]/) && val.match(/[0-9]/)) score++;
        if (val.match(/[^A-Za-z0-9]/)) score++;

        // Resetear clases
        [bar1, bar2, bar3].forEach(b => b.className = 'strength-bar');
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

// Toggle para mostrar/ocultar contraseña
document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.getElementById('toggle-password');
    const togglePasswordConfirm = document.getElementById('toggle-password-confirm');
    const passwordInput = document.getElementById('password');
    const passwordConfirmInput = document.getElementById('password-confirm');

    if (togglePassword) {
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('active');
        });
    }

    if (togglePasswordConfirm) {
        togglePasswordConfirm.addEventListener('click', function() {
            const type = passwordConfirmInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordConfirmInput.setAttribute('type', type);
            this.classList.toggle('active');
        });
    }
});
