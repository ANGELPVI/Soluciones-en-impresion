module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily:{

        'titulo':['"Prompt"', 'sans-serif']
      }
      
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
