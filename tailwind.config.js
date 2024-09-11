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
        'main': ['Antic Didone', ...defaultTheme.fontFamily.sans],
        'montserrat': ['Montserrat Alternates', ...defaultTheme.fontFamily.sans]
      },
      colors: {
        'eventi':{
            'rosa':'#F9F6EE',
            'cafe':'#DF9660',
            'gris':'#E5E7EB',
            'celeste':'#87CEEB',
            'azul':'#64A1B9',
            'lapizlazule':'#063254',

        }
      },
    },
  },
  plugins: [],
}

