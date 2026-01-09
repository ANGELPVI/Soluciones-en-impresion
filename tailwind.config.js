module.exports = {
  // 1. Activamos el modo Just-in-Time para que sea ultra rápido
  mode: 'jit', 

  // 2. Especificamos qué archivos debe vigilar para extraer las clases
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.css',
  ],

  darkMode: false, 
  theme: {
    extend: {
      screens: {
        'xs': { 'min': '280px', 'max': '640px' },
      },
      textColor: {
        'titulos': '#505556',
        'comentario': '#656363'
      },
      fontFamily: {
        'titulo': ['"Calistoga"', 'cursive'],
        'descrip': ['"Open Sans"', 'sans-serif'], // Corregido: sans-serif
      },
      height: {
        '100': '500px',
        '150': '800px',
      },
      backgroundImage: theme => ({
        'fondo': "url('/img/amarillo.svg')",
      })
    },
  },
  variants: {
    extend: {
      borderWidth: ['hover', 'focus'],
      borderColor: ['hover', 'active'],
      transform: ['hover', 'focus'],
      transitionDuration: ['hover', 'focus'],
      display: ['group-focus']
    },
  },
  plugins: [],
}