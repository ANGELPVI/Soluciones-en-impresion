module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      textColor: {
        'titulos': '#505556',
      },

      fontFamily:{
        'titulo':['"Calistoga"', 'cursive'],
        'descrip':['"Open Sans"','sans-seri'],

      },
      backgroundImage: theme => ({
        'fondo': "url('/img/amarillo.svg')",
       })
      
    },
  },
  variants: {
    extend: {
      borderWidth: ['hover', 'focus'],
      borderColor: ['hover','active'],
      transform: ['hover', 'focus'],
      transitionDuration: ['hover', 'focus'],
    },
  },
  plugins: [],
}
