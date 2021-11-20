module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily:{

        'titulo':['"Amaranth"', 'sans-serif'],
        'descrip':['"Coda"','cursive'],
        'logo':['"Oswald"','sans-serif']

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
