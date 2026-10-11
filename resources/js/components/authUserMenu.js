// Activa el menú de usuario y permite cerrarlo con Escape o al hacer clic fuera.
const userMenu = document.getElementById('userMenu');
const optionUser = document.getElementById('optionUser');

if (userMenu && optionUser) {
  const closeMenu = () => {
    optionUser.classList.add('hidden');
    userMenu.setAttribute('aria-expanded', 'false');
  };

  userMenu.addEventListener('click', () => {
    const isOpen = !optionUser.classList.contains('hidden');
    optionUser.classList.toggle('hidden', isOpen);
    userMenu.setAttribute('aria-expanded', String(!isOpen));
  });

  document.addEventListener('click', (event) => {
    if (!event.target.closest('.menu-usuario')) {
      closeMenu();
    }
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      closeMenu();
      userMenu.focus();
    }
  });
}
