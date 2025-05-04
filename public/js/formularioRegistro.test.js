import { agregarListenersGenerales } from './formularioRegistro.js';

describe('agregarListenersGenerales', () => {
  document.body.innerHTML = `
    <input id="nombre" />
    <input id="email" />
  `;

  const mockValidarFn = jest.fn(); // función simulada para validar

  const campos = {
    nombre: document.getElementById('nombre'),
    email: document.getElementById('email'),
  };

  beforeEach(() => {
    mockValidarFn.mockClear(); // limpiar antes de cada test
  });

  test('agrega listeners a todos los inputs y llama a la función de validación con los argumentos correctos', () => {
    agregarListenersGenerales(campos, mockValidarFn);

    // Simular que el usuario escribe en los campos
    campos.nombre.value = 'Juan';
    campos.nombre.dispatchEvent(new Event('input'));

    campos.email.value = 'juan@example.com';
    campos.email.dispatchEvent(new Event('input'));

    // Verificar que la función fue llamada correctamente
    expect(mockValidarFn).toHaveBeenCalledWith('Juan', 'nombre');
    expect(mockValidarFn).toHaveBeenCalledWith('juan@example.com', 'email');
    expect(mockValidarFn).toHaveBeenCalledTimes(2);
  });
});

  
 