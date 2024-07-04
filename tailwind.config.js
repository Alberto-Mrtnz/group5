const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'moon': ['Moon Dance', ...defaultTheme.fontFamily.sans],
        'montserrat': ['Montserrat Alternates', ...defaultTheme.fontFamily.sans]
      },
      colors: {
        'fika':{
            'rosado':'#F5CAC3',
            'turquesa':'#84A59D',
            'gris':'#5E6472',
            'prueba':'#A1C2BA',
            'lavanda':'#D6EAEA',


        }
      },
    },
  },
  plugins: [],
}

