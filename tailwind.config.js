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
            'brown':'#E2D1CB',
            'purple':'#7B5070',
            'black':'#1F1A37',
            'piel':'#F0E6DE',
            'pink':'#E8B2D0',
            'orange':'#CE7457',
            'sand':'#EAD1BA',

        }
      },
    },
  },
  plugins: [],
}

