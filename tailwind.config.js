module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {

    extend: {
      // fontSize:{'xs': '.7rem'},
      screens: {
        'xs': { 'min': '280px', 'max': '640px' },
      },
      textColor: {
        'titulos': '#505556',
        'comentario': '#656363'
      },

      fontFamily: {
        'titulo': ['"Calistoga"', 'cursive'],
        'descrip': ['"Open Sans"', 'sans-seri'],

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
