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
            'green': '#6E8880',
            'lavander':'#E7E3F1',
            'wisteria':'#AFA3D5',
            'black':'#2E2C39',
        }
      },
    },
  },
  plugins: [],
}

